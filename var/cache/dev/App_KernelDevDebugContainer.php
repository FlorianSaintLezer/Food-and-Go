<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVHYbT9U\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVHYbT9U/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVHYbT9U.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVHYbT9U\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVHYbT9U\App_KernelDevDebugContainer([
    'container.build_hash' => 'VHYbT9U',
    'container.build_id' => '9512cc6e',
    'container.build_time' => 1616190176,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVHYbT9U');
