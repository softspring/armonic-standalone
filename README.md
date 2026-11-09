<p align="center"><a href="https://softspring.es/en/armonic" target="_blank">
  <img src="https://raw.githubusercontent.com/softspring/armonic-standalone/refs/heads/6.0/assets/images/logo.png" alt="Armonic"/>
</a></p>

<h3 align="center">
  The Armonic Documentation
</h3>

<p align="center">
  <a href="https://armonic.softspring.es/6.0/">
    Read documentation online
  </a>
    ·
  <a href="https://github.com/softspring/armonic">
    Fork Armonic on GitHub
  </a>
    ·
  Supported by
  <a href="https://softspring.es/">
    Softspring
  </a>
</p>

<p align="center">
  <a href="https://github.com/softspring/armonic-standalone/actions/workflows/ci.yml">
    <img src="https://img.shields.io/github/actions/workflow/status/softspring/armonic-standalone/ci.yml?branch=6.0&style=flat-square&label=CI" alt="CI"/>
  </a>
  <a href="https://app.codecov.io/gh/softspring/armonic-standalone/tree/6.0"><img src="https://img.shields.io/codecov/c/github/softspring/armonic-standalone?branch=6.0&style=flat-square" alt="Coverage"/></a>
</p>

## Local frontend development

After installing the PHP dependencies, run `npm install` and `npm run dev` from the project root. See the [standalone installation guide](https://armonic.softspring.es/6.0/use-armonic-standalone-edition) for the application setup.

The Webpack aliases point to the source `assets/` directories of the installed Softspring packages. The admin entry loads the shared admin shell scripts and styles. Keep the layout based on that shell instead of adding a fixed header, which can cover its page actions.

Webpack is pinned to `5.105.4` because Encore 4's copy loader uses an internal API removed in later Webpack versions. Recheck the frontend build before changing either dependency.

## Contributing

We will be happy to receive your contributions to this documentation. Feel free to fork the repository, make your
changes and send a pull request.
