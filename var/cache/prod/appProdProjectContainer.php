<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVtim9q4\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVtim9q4/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVtim9q4.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVtim9q4\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVtim9q4\appProdProjectContainer([
    'container.build_hash' => 'Vtim9q4',
    'container.build_id' => 'bb30ca01',
    'container.build_time' => 1677682908,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVtim9q4');
