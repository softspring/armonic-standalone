const path = require('path');
const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .addAliases({
        '@softspring/cms-bundle': path.resolve(__dirname, 'vendor/softspring/cms-bundle/assets'),
        '@softspring/media-bundle': path.resolve(__dirname, 'vendor/softspring/media-bundle/assets'),
        '@softspring/cms-module-collection': path.resolve(__dirname, 'vendor/softspring/cms-module-collection/assets'),
        '@softspring/collection-form-type': path.resolve(__dirname, 'vendor/softspring/collection-form-type/assets'),
        '@softspring/translatable-bundle': path.resolve(__dirname, 'vendor/softspring/translatable-bundle/assets'),
        '@softspring/components': path.resolve(__dirname, 'vendor/softspring/components/assets'),
    })
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or subdirectory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')
    .addEntry('admin', './assets/admin.js')

    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    // .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // configure Babel
    // .configureBabel((config) => {
    //     config.plugins.push('@babel/a-babel-plugin');
    // })

    // enables and configure @babel/preset-env polyfills
    .configureBabel((config) => { config.sourceType = 'module'; })
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.38';
    })

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // .copyFiles({
    //     from: './assets/images',
    //     to: 'images/[path][name].[ext]',
    //     pattern: /\.(png|jpg|jpeg|gif|svg|json|ico|mp4|webm|ogv)$/
    // })

    // copy tinymce's skin files
    .copyFiles({
        from: 'node_modules/tinymce',
        to: 'tinymce/[path]/[name].[ext]'
    })
;

const config = Encore.getWebpackConfig();
config.resolve = config.resolve || {};
config.resolve.modules = [
    path.resolve(__dirname, 'node_modules'),
    'node_modules'
];

module.exports = config;
