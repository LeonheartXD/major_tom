<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYuyYJUi\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYuyYJUi/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYuyYJUi.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYuyYJUi\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerYuyYJUi\srcApp_KernelProdContainer([
    'container.build_hash' => 'YuyYJUi',
    'container.build_id' => '69357649',
    'container.build_time' => 1569888559,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYuyYJUi');
