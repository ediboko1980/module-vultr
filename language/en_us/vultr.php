<?php
/**
 * en_us language for the vultr module.
 */
// Basics
$lang['Vultr.name'] = 'Vultr';
$lang['Vultr.module_row'] = 'Account';
$lang['Vultr.module_row_plural'] = 'Accounts';
$lang['Vultr.tab_actions'] = 'Actions';
$lang['Vultr.tab_stats'] = 'Statistics';
$lang['Vultr.tab_snapshots'] = 'Snapshots';
$lang['Vultr.tab_backups'] = 'Backups';
$lang['Vultr.tab_client_actions'] = 'Actions';
$lang['Vultr.tab_client_stats'] = 'Statistics';
$lang['Vultr.tab_client_snapshots'] = 'Snapshots';
$lang['Vultr.tab_client_backups'] = 'Backups';

// Module management
$lang['Vultr.add_module_row'] = 'Add Account';
$lang['Vultr.manage.module_rows_title'] = 'Accounts';
$lang['Vultr.manage.module_rows_heading.name'] = 'Account';
$lang['Vultr.manage.module_rows_heading.options'] = 'Options';
$lang['Vultr.manage.module_rows.edit'] = 'Edit';
$lang['Vultr.manage.module_rows.delete'] = 'Delete';
$lang['Vultr.manage.module_rows.confirm_delete'] = 'Are you sure you want to delete this account?';
$lang['Vultr.manage.module_rows_no_results'] = 'There are no accounts.';

// Add row
$lang['Vultr.add_row.box_title'] = 'Add Vultr Server';
$lang['Vultr.add_row.basic_title'] = 'Basic Settings';
$lang['Vultr.add_row.add_btn'] = 'Add Server';

$lang['Vultr.edit_row.box_title'] = 'Edit Vultr Server';
$lang['Vultr.edit_row.basic_title'] = 'Basic Settings';
$lang['Vultr.edit_row.add_btn'] = 'Edit Server';

$lang['Vultr.row_meta.account_name'] = 'Account Name';
$lang['Vultr.row_meta.api_key'] = 'API Key';

// Package fields
$lang['Vultr.package_fields.server_type'] = 'Server Type';
$lang['Vultr.package_fields.server_type.baremetal'] = 'Bare Metal';
$lang['Vultr.package_fields.server_type.server'] = 'Virtual Machine';
$lang['Vultr.package_fields.baremetal_plan'] = 'Bare Metal Plan';
$lang['Vultr.package_fields.server_plan'] = 'Server Plan';
$lang['Vultr.package_fields.set_template'] = 'Set Template';
$lang['Vultr.package_fields.admin_set_template'] = 'Select a template';
$lang['Vultr.package_fields.client_set_template'] = 'Let client set template';
$lang['Vultr.package_fields.template'] = 'Template';
$lang['Vultr.package_fields.surcharge_templates'] = 'Surcharge Templates';
$lang['Vultr.package_fields.allow_surcharge_templates'] = 'Allow Surcharge Templates';
$lang['Vultr.package_fields.disallow_surcharge_templates'] = 'Disallow Surcharge Templates';

// Service fields
$lang['Vultr.service_field.subid'] = 'Vultr SUBID';
$lang['Vultr.service_field.hostname'] = 'Hostname';
$lang['Vultr.service_field.location'] = 'Location';
$lang['Vultr.service_field.template'] = 'Template';
$lang['Vultr.service_field.ipv6'] = 'IPv6 Networking';
$lang['Vultr.service_field.enable_ipv6'] = 'Enable IPv6';
$lang['Vultr.service_field.disable_ipv6'] = 'Disable IPv6';

// Service management
$lang['Vultr.tab_actions.status_title'] = 'Server Status';
$lang['Vultr.tab_actions.server_title'] = 'Server Actions';
$lang['Vultr.tab_actions.action_restart'] = 'Restart';
$lang['Vultr.tab_actions.action_stop'] = 'Stop';
$lang['Vultr.tab_actions.action_start'] = 'Start';
$lang['Vultr.tab_actions.action_reinstall_template'] = 'Reinstall Template';
$lang['Vultr.tab_actions.action_change_template'] = 'Change Template';
$lang['Vultr.tab_actions.heading_change_template'] = 'Change Template';
$lang['Vultr.tab_actions.field_template'] = 'Template';
$lang['Vultr.tab_actions.field_change_template_submit'] = 'Change Template';
$lang['Vultr.tab_actions.action_kvm_console'] = 'KVM Console';

$lang['Vultr.tab_stats.server_information'] = 'Server Information';
$lang['Vultr.tab_stats.info_heading.field'] = 'Field';
$lang['Vultr.tab_stats.info_heading.value'] = 'Value';
$lang['Vultr.tab_stats.info.os'] = 'Operating System';
$lang['Vultr.tab_stats.info.ram'] = 'Server RAM';
$lang['Vultr.tab_stats.info.disk'] = 'Server Disk';
$lang['Vultr.tab_stats.info.main_ip'] = 'Main IP';
$lang['Vultr.tab_stats.info.vcpu_count'] = 'Virtual CPUs';
$lang['Vultr.tab_stats.info.cpu_count'] = 'CPU Cores';
$lang['Vultr.tab_stats.info.location'] = 'Location';
$lang['Vultr.tab_stats.info.default_password'] = 'Default Password';
$lang['Vultr.tab_stats.info.current_bandwidth_gb'] = 'Current Bandwidth (in GB)';
$lang['Vultr.tab_stats.info.allowed_bandwidth_gb'] = 'Allowed Bandwidth (in GB)';
$lang['Vultr.tab_stats.info.netmask_v4'] = 'IPv4 Netmask';
$lang['Vultr.tab_stats.info.gateway_v4'] = 'IPv4 Gateway';
$lang['Vultr.tab_stats.app_information'] = 'Application Information';

$lang['Vultr.tab_snapshots.snapshots'] = 'Snapshots';
$lang['Vultr.tab_snapshots.heading_row_snapshot_id'] = 'Snapshot ID';
$lang['Vultr.tab_snapshots.heading_row_description'] = 'Description';
$lang['Vultr.tab_snapshots.heading_row_options'] = 'Options';
$lang['Vultr.tab_snapshots.restore_snapshot'] = 'Restore Snapshot';
$lang['Vultr.tab_snapshots.remove_snapshot'] = 'Remove Snapshot';
$lang['Vultr.tab_snapshots.no_snapshots'] = 'There are currently no snapshots.';
$lang['Vultr.tab_snapshots.heading_create'] = 'Create Snapshot';
$lang['Vultr.tab_snapshots.field_description'] = 'Description';
$lang['Vultr.tab_snapshots.field_create_submit'] = 'Create';

$lang['Vultr.tab_backups.backups'] = 'Backups';
$lang['Vultr.tab_backups.heading_row_backup_id'] = 'Backup ID';
$lang['Vultr.tab_backups.heading_row_date_created'] = 'Date Created';
$lang['Vultr.tab_backups.heading_row_description'] = 'Description';
$lang['Vultr.tab_backups.heading_row_options'] = 'Options';
$lang['Vultr.tab_backups.restore_backup'] = 'Restore Backup';
$lang['Vultr.tab_backups.no_backups'] = 'There are currently no backups.';
$lang['Vultr.tab_backups.backups_disabled'] = 'This server does not have automatic backups enabled or does not support it.';

// Client actions
$lang['Vultr.tab_client_actions.heading_status'] = 'Server Status';
$lang['Vultr.tab_client_actions.status_online'] = 'Online';
$lang['Vultr.tab_client_actions.status_offline'] = 'Offline';

$lang['Vultr.tab_client_actions.heading_actions'] = 'Actions';
$lang['Vultr.tab_client_actions.action_restart'] = 'Restart';
$lang['Vultr.tab_client_actions.action_stop'] = 'Stop';
$lang['Vultr.tab_client_actions.action_start'] = 'Start';
$lang['Vultr.tab_client_actions.action_reinstall_template'] = 'Reinstall Template';
$lang['Vultr.tab_client_actions.action_change_template'] = 'Change Template';
$lang['Vultr.tab_client_actions.action_kvm_console'] = 'KVM Console';

$lang['Vultr.tab_client_actions.heading_change_template'] = 'Change Template';
$lang['Vultr.tab_client_actions.field_template'] = 'Template';
$lang['Vultr.tab_client_actions.field_change_template_submit'] = 'Change Template';

// Client statistics
$lang['Vultr.tab_client_stats.server_information'] = 'Server Information';
$lang['Vultr.tab_client_stats.info_heading.field'] = 'Field';
$lang['Vultr.tab_client_stats.info_heading.value'] = 'Value';
$lang['Vultr.tab_client_stats.info.os'] = 'Operating System';
$lang['Vultr.tab_client_stats.info.ram'] = 'Server RAM';
$lang['Vultr.tab_client_stats.info.disk'] = 'Server Disk';
$lang['Vultr.tab_client_stats.info.main_ip'] = 'Main IP';
$lang['Vultr.tab_client_stats.info.vcpu_count'] = 'Virtual CPUs';
$lang['Vultr.tab_client_stats.info.cpu_count'] = 'CPU Cores';
$lang['Vultr.tab_client_stats.info.location'] = 'Location';
$lang['Vultr.tab_client_stats.info.default_password'] = 'Default Password';
$lang['Vultr.tab_client_stats.info.current_bandwidth_gb'] = 'Current Bandwidth (in GB)';
$lang['Vultr.tab_client_stats.info.allowed_bandwidth_gb'] = 'Allowed Bandwidth (in GB)';
$lang['Vultr.tab_client_stats.info.netmask_v4'] = 'IPv4 Netmask';
$lang['Vultr.tab_client_stats.info.gateway_v4'] = 'IPv4 Gateway';

$lang['Vultr.tab_client_stats.app_information'] = 'Application Information';

// Client snapshots
$lang['Vultr.tab_client_snapshots.snapshots'] = 'Snapshots';
$lang['Vultr.tab_client_snapshots.snapshot_id'] = 'Snapshot ID';
$lang['Vultr.tab_client_snapshots.description'] = 'Description';
$lang['Vultr.tab_client_snapshots.options'] = 'Options';
$lang['Vultr.tab_client_snapshots.heading_restore_snapshot'] = 'Restore Snapshot %1$s'; // %1$s is the snapshot id
$lang['Vultr.tab_client_snapshots.heading_remove_snapshot'] = 'Remove Snapshot %1$s'; // %1$s is the snapshot id
$lang['Vultr.tab_client_snapshots.confirm_restore_snapshot'] = 'Are you sure you want to restore this snapshot?';
$lang['Vultr.tab_client_snapshots.confirm_remove_snapshot'] = 'Are you sure you want to permanently remove this snapshot?';
$lang['Vultr.tab_client_snapshots.cancel'] = 'Cancel';
$lang['Vultr.tab_client_snapshots.restore_snapshot'] = 'Restore Snapshot';
$lang['Vultr.tab_client_snapshots.remove_snapshot'] = 'Remove Snapshot';
$lang['Vultr.tab_client_snapshots.no_snapshots'] = 'There are currently no snapshots.';

$lang['Vultr.tab_client_snapshots.heading_create'] = 'Create Snapshot';
$lang['Vultr.tab_client_snapshots.field_description'] = 'Description';
$lang['Vultr.tab_client_snapshots.field_create_submit'] = 'Create';

// Client backups
$lang['Vultr.tab_client_backups.backups'] = 'Backups';
$lang['Vultr.tab_client_backups.backup_id'] = 'Backup ID';
$lang['Vultr.tab_client_backups.date_created'] = 'Date Created';
$lang['Vultr.tab_client_backups.description'] = 'Description';
$lang['Vultr.tab_client_backups.options'] = 'Options';
$lang['Vultr.tab_client_backups.restore_backup'] = 'Restore Backup';
$lang['Vultr.tab_client_backups.heading_restore_backup'] = 'Restore Backup %1$s'; // %1$s is the backup id
$lang['Vultr.tab_client_backups.confirm_restore_backup'] = 'Are you sure you want to restore this backup?';
$lang['Vultr.tab_client_backups.cancel'] = 'Cancel';
$lang['Vultr.tab_client_backups.no_backups'] = 'There are currently no backups.';
$lang['Vultr.tab_client_backups.backups_disabled'] = 'This server does not have automatic backups enabled or does not support it.';

// Service info
$lang['Vultr.service_info.hostname'] = 'Hostname';
$lang['Vultr.service_info.os'] = 'Operating System';
$lang['Vultr.service_info.location'] = 'Location';
$lang['Vultr.service_info.main_ip'] = 'Main IP';
$lang['Vultr.service_info.default_password'] = 'Password';

// Tooltips
$lang['Vultr.service_field.tooltip.subid'] = 'The unique identifier for this subscription.';

// Errors
$lang['Vultr.!error.account_name_valid'] = 'Please enter a valid Account Name.';
$lang['Vultr.!error.api_key_valid'] = 'The API Key appears to be invalid.';
$lang['Vultr.!error.api_key_valid_connection'] = 'A connection to the server could not be established. Please check to ensure that the API Key is correct.';

$lang['Vultr.!error.meta[server_type].valid'] = 'The Server Type appears to be invalid.';
$lang['Vultr.!error.meta[baremetal_plan].format'] = 'Please select a valid Bare Metal Plan.';
$lang['Vultr.!error.meta[server_plan].format'] = 'Please select a valid Server Plan.';

$lang['Vultr.!error.api.internal'] = 'An internal error occurred, or the server did not respond to the request.';
$lang['Vultr.!error.module_row.missing'] = 'An internal error occurred. The module row is unavailable.';

$lang['Vultr.!error.vultr_hostname.format'] = 'Please enter a valid hostname, e.g. domain.com.';
$lang['Vultr.!error.vultr_location.valid'] = 'Plese select a valid location.';
$lang['Vultr.!error.vultr_template.valid'] = 'Plese select a valid template.';
$lang['Vultr.!error.vultr_subid.valid'] = 'Plese enter a valid Vultr SUBID.';