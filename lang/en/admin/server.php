<?php

return [
    'create_action' => ':action Server',
    'nav_title' => 'Servers',
    'model_label' => 'Server',
    'model_label_plural' => 'Servers',
    'no_servers' => 'No Servers',
    'next_step' => 'Next Step',
    'ip_address' => 'IP Address',
    'ip_address_helper' => 'Usually your machine\'s public IP unless you are port forwarding.',
    'port' => 'Port',
    'ports' => 'Ports',
    'alias' => 'Alias',
    'alias_helper' => 'Optional display name to help you remember what these are.',
    'name' => 'Name',
    'external_id' => 'External ID',
    'owner' => 'Owner',
    'description' => 'Description',
    'install_script' => 'Run Install Script?',
    'start_after' => 'Start After Install?',
    'yes' => 'Yes',
    'no' => 'No',
    'skip' => 'Skip',
    'primary' => 'Primary',
    'make_primary' => 'Make Primary',
    'startup_cmd' => 'Startup Command',
    'default_startup' => 'Default Startup Command',
    'variables' => 'Variables',
    'resource_limits' => 'Resource Limits',
    'cpu' => 'CPU',
    'cpu_limit' => 'CPU Limit',
    'cpu_helper' => '100% equals one CPU core.',
    'unlimited' => 'Unlimited',
    'limited' => 'Limited',
    'enabled' => 'Enabled',
    'disabled' => 'Disabled',
    'memory' => 'Memory',
    'memory_limit' => 'Memory Limit',
    'disk' => 'Disk Space',
    'disk_limit' => 'Disk Space Limit',
    'advanced_limits' => 'Advanced Limits',
    'cpu_pin' => 'CPU Pinning',
    'threads' => 'Pinned Threads',
    'pin_help' => 'Add pinned thread, e.g. 0 or 2-4',
    'swap' => 'Swap Memory',
    'swap_limit' => 'Swap Memory Limit',
    'oom' => 'OOM Killer',
    'feature_limits' => 'Feature Limits',
    'docker_settings' => 'Docker Settings',
    'docker_image' => 'Docker Image',
    'image_name' => 'Image Name',
    'primary_allocation' => 'Primary Allocation',
    'image' => 'Image',
    'image_placeholder' => 'Enter a custom image',
    'container_labels' => 'Container Labels',
    'title' => 'Title',
    'actions' => 'Actions',
    'console' => 'Console',
    'suspend' => 'Suspend',
    'unsuspend' => 'Unsuspend',
    'reinstall' => 'Reinstall',
    'reinstall_help' => 'This will reinstall the server with the assigned egg install script.',
    'reinstall_modal_heading' => 'Are you sure you want to reinstall this server?',
    'reinstall_modal_description' => '!! This can result in unrecoverable data loss !!',
    'server_status' => 'Server Status',
    'uuid' => 'UUID',
    'node' => 'Node',
    'short_uuid' => 'Short UUID',
    'toggle_install' => 'Toggle Install Status',
    'toggle_install_help' => 'If you need to change the install status from uninstalled to installed, or vice versa, you may do so with this button.',
    'transfer' => 'Transfer',
    'transfer_help' => 'Transfer this server to another node connected to this panel. Warning! This feature has not been fully tested and may have bugs.',
    'condition' => 'Condition',
    'suspend_all' => 'Suspend All Servers',
    'unsuspend_all' => 'Unsuspend All Servers',
    'select_allocation' => 'Select Allocation',
    'new_allocation' => 'Create New Allocation',
    'additional_allocations' => 'Additional Allocations',
    'select_additional' => 'Select Additional Allocations',
    'no_variables' => 'The selected egg has no variables!',
    'select_egg' => 'Select an egg first to show its variables!',
    'allocations' => 'Allocations',
    'databases' => 'Databases',
    'no_databases' => 'No Databases exist for this Server',
    'delete_db' => 'Are you sure you want to delete',
    'delete_db_heading' => 'Delete Database?',
    'backups' => 'Backups',
    'egg' => 'Egg',
    'mounts' => 'Mounts',
    'no_mounts' => 'No Mounts exist for this Node',
    'create_database' => 'Create Database',
    'no_db_hosts' => 'No Database Hosts',
    'failed_to_create' => 'Failed to create Database',
    'change_egg' => 'Change Egg',
    'new_egg' => 'New Egg',
    'keep_old_variables' => 'Keep old variables if possible?',
    'create_allocation' => 'Create Allocation',
    'add_allocation' => 'Add Allocation',
    'view' => 'View',
    'tabs' => [
        'information' => 'Information',
        'egg_configuration' => 'Egg Configuration',
        'environment_configuration' => 'Environment Configuration',
    ],
    'notifications' => [
        'server_suspension' => 'Server Suspension',
        'server_suspended' => 'Server has been suspended',
        'server_suspend_help' => 'This will suspend the Server, stop any running processes, and immediately block the user from being able to access their files or otherwise manage the Server through the panel or API.',
        'server_unsuspend_help' => 'This will unsuspend the Server and restore normal user access.',
        'server_unsuspended' => 'Server has been unsuspended',
        'create_failed' => 'Could not create Server',
        'invalid_port_range' => 'Invalid Port Range',
        'invalid_port_range_body' => 'Your port range are not valid integers: :port',
        'too_many_ports' => 'Too many ports at one time!',
        'too_many_ports_body' => 'The current limit is :limit number of ports at one time.',
        'invalid_port' => 'Port not in valid range',
        'invalid_port_body' => ':i is not in the valid port range between :portFloor-:portCeil',
        'already_exists' => 'Port already in use',
        'already_exists_body' => ':i is already with an allocation',
    ],
];
