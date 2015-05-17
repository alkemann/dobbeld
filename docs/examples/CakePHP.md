# Using DoubleD with CakePHP

## Using it raw

Follow the base installation steps:

 * Require as dev with composer using : composer require --dev alkemann/dobbeld "~0.1"
 * Symlink the "webroot" folder as "dobbeld" in your application's web root

## Using it as a panel in the DebugKit

Follow the base installation then take these steps:

 * Add this to your config/app.php config: `'DebugKit' => ['panels' => ['Dump']],`
 * Copy the files form /docs/examples/files/CakePHP onto your CakePHP project

Then if you use the single d() debug method, the output will be available through the "Dump" panel. Double
dd() dumps will exit like normal.
