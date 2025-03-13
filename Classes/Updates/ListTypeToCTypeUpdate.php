<?php

declare(strict_types=1);

namespace PwTeaserTeam\PwTeaser\Updates;

use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\AbstractListTypeToCTypeUpdate;

/**
 * @since 13.0
 */
#[UpgradeWizard('ListTypeToCTypeUpdate')]
final class ListTypeToCTypeUpdate extends AbstractListTypeToCTypeUpdate
{
    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'pwteaser_pi1' => 'pwteaser_pi1',
        ];
    }

    public function getTitle(): string
    {
        return 'Migrate pw_teaser list_type to CType';
    }

    public function getDescription(): string
    {
        return 'Migrates pw_teaser plugins from list_type to the new CType.';
    }
}
