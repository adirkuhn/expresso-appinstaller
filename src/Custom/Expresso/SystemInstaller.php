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
        if ( $package->getTargetDir() == "") {
		throw new \InvalidArgumentException('Can\'t find property target-dir');
	}

	return ('../../' . $package->getTargetDir());
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
