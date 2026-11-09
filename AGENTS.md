# Working rules

- Follow the workspace rules and confirm the target branch before changing this project.
- Keep installation instructions in `README.md` or `armonic-docs`; keep this file limited to operational rules.
- After changing frontend dependencies, aliases, templates, or entries, run `npm install` and `npm run dev` with the matching Composer dependencies.
- Also check the affected screens in a browser for JavaScript errors. A successful Webpack build does not prove that the editor works.
- Use an isolated application copy and a new database for documentation captures and installation checks. Do not reset an existing developer database to prepare screenshots.
- Capture real interfaces and use fictitious content and accounts. Record any setup changes needed for the captures separately from commands that passed unchanged.

- Keep the Symfony application on a maintained line and do not bypass security-blocked dependencies to make CI pass.
- Run `composer test` and `composer test-bc` sequentially, keeping automatic constraint bumping disabled so both use the reviewed requirements.
