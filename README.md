# dobbeld
### Debug tool

## Installation

* Require as dev with composer using : composer require --dev alkemann/dobbeld "~0.1"
* Symlink the "webroot" folder as "dobbeld" in your application's web root

## Usage

Several global namespace functions will be made available that allow you do Debug Dump data at
any point in your applications.

### dd()
This is the primary function and it takes any amount of arguments and will dump them out, halting the application at this point with an exit call.

### d()
This works just like the primary function, except that it does not include an exit call. Depending on if
you have configured the tool to "echo" or not, this will either immediately echo out the dump, or it will
store it for later output. (See dout() below.)

### dout()
If the "echo" setting is off, calls to d() will have stored dumps in memory. Use this method to dump them.
For example in the footer of your layout.

### dapi()
Dumps the methods of any object you send to it.

### ds($setting, $value)
Configure the tool

### dsb($value, $category = 'property')
Ban properties of objects from appearing in dumps. Other categories are 'key' for array keys and 'class'
These categories can also be configued directly using dbc(), dbp() and dbk().
