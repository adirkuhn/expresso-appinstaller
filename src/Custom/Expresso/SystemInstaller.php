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
        return 'data/templates/'.substr($package->getPrettyName(), 23);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'phpdocumentor-template' === $packageType;
    }
}

?>
