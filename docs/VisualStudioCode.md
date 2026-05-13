**[Back](../README.md)**

# Visual Studio Code format

Install the Visual Studio Code extension:
- `muuvmuuv.vscode-just-php-cs-fixer`

Then add this to your workspace `.vscode/settings.json`:

```json
{
	"php-cs-fixer.allow-risky": true,
	"[php]": {
		"editor.defaultFormatter": "muuvmuuv.vscode-just-php-cs-fixer",
		"editor.formatOnSave": true
	}
}
```

The extension uses the project PHP-CS-Fixer configuration from `.php-cs-fixer.dist.php`, so formatting on save follows the configured code style rules.