<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container53hOOmM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container53hOOmM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container53hOOmM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container53hOOmM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container53hOOmM\App_KernelDevDebugContainer([
    'container.build_hash' => '53hOOmM',
    'container.build_id' => 'f66f93b1',
    'container.build_time' => 1594210942,
], __DIR__.\DIRECTORY_SEPARATOR.'Container53hOOmM');
