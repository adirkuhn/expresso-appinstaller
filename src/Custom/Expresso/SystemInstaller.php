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
	print_r($package);
        return 'data/templates/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        //return 'phpdocumentor-template' === $packageType;
	return true;
    }
}

?>
