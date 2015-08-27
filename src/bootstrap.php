<?

function exceptionHandling($exception) {
  echo "TSITE: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>"
}

set_exception_handler('exceptionHandling');

function autoLoader($classIn) {
  $path = TSITE_INSTALL_PATH . "/src/{$classIn}/{$classIn}.php";
  if(is_file($path)) {
    include($path);
  } else {
    throw new Exception("Classfile ' {$classIn} ' does not exist.");
  }
}

spl_autoload_register('autoLoader');
