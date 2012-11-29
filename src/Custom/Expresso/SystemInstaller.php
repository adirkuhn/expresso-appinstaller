<?php
namespace Custom\Expresso;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class SystemInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
	ob_start();
	print_r($package->getTargetDir());
	print_r($package);
        $output = ob_get_clean();
        file_put_contents( "loucolog.log",  $output , FILE_APPEND);
        
	return 'data/templates/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        	ob_start();
	print_r($packageType);
        $output = ob_get_clean();
        file_put_contents( "loucolog.log",  $output , FILE_APPEND);
//return 'phpdocumentor-template' === $packageType;
	return true;
    }
}

?>
