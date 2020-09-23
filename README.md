# Static Code Analysis with Phan
This package has been created to demonstrate how to work with Phan, a Static Code Analysis tool recommended by Rasmus Lerdorf.

### System requirements
* PHP 7.2+
* PHP-AST extension

### phpDocumentor
You can download the phpDocumentor "phar" (PHP Archive) from the following URL:

https://docs.phpdoc.org/latest/getting-started/installing.html#phar

### Coding Standards and Conventions
* **Add a blank line before return statements**, unless the return is alone inside a statement-group
* **Always use identical comparison** unless you need type juggling
* **Use Yoda conditions** when checking a variable against an expression to avoid an accidental assignment
* **Add a comma after each array item in a multi-line array**, even after the last one
* **Use braces to indicate control structure body** regardless of the number of statements it contains
* **Define one class per file**
* **Declare class properties before methods**
* **Declare public methods first**
* Naming Conventions
  * Classes: **ClassName**
  * Variables: **$variableName**
  * Methods: **methodName()**
  * Parameters: **parameter_key**