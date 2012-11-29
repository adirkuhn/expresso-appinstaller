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
        if (!empty()) {
		return '../../' . $package->getTargetDir();
	}
	else {
		throw new \InvalidArgumentException('Can\'t find property target-dir');
	}
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
