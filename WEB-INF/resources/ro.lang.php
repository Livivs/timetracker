<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option.
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

// Note to translators: Please use proper capitalization rules for your language.

$i18n_language = 'Română';
$i18n_months = array('Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie');
$i18n_weekdays = array('Duminica', 'Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata');
$i18n_weekdays_short = array('Du', 'Lu', 'Ma', 'Mi', 'Jo', 'Vi', 'Sa');
// format mm/dd
$i18n_holidays = array('01/01', '01/02', '04/19', '04/20', '05/01', '06/07', '06/08', '08/15', '12/01', '12/25', '12/26');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Autentificare',
'menu.logout' => 'Iesire',
// TODO: translate the following.
// 'menu.forum' => 'Forum',
'menu.help' => 'Ajutor',
// TODO: translate the following.
// 'menu.create_team' => 'Create Team',
'menu.profile' => 'Profil',
'menu.time' => 'Timpul',
// TODO: translate the following.
// 'menu.expenses' => 'Expenses',
'menu.reports' => 'Rapoarte',
// TODO: translate the following.
// 'menu.charts' => 'Charts',
'menu.projects' => 'Proiecte',
// TODO: translate the following.
// 'menu.tasks' => 'Tasks',
'menu.users' => 'Utilizatori',
'menu.teams' => 'Echipe',
// TODO: translate the following.
// 'menu.export' => 'Export',
'menu.clients' => 'Clienti',
// TODO: translate the following.
// 'menu.options' => 'Options',

// Footer - strings on the bottom of most pages.
// TODO: translate the following.
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: translate the following.
// 'error.access_denied' => 'Access denied.',
// 'error.sys' => 'System error.',
'error.db' => 'Eroare baza de date.',
// TODO: translate the following.
// 'error.field' => 'Incorrect "{0}" data.',
'error.empty' => 'Campul "{0}" este gol.',
'error.not_equal' => 'Campul "{0}" nu este egal cu campul "{1}".',
// TODO: translate the following.
// 'error.interval' => 'Field "{0}" must be greater than "{1}".',
// TODO: for "select" errors: Selecteaza or Alege? We need consistent usage.
'error.project' => 'Selecteaza proiect.',
// TODO: translate the following.
// 'error.task' => 'Select task.',
'error.client' => 'Alege client.',
// TODO: translate the following.
// 'error.report' => 'Select report.',
// 'error.record' => 'Select record.',
'error.auth' => 'Nume de utilizator sau parola incorecta.',
// TODO: translate the following.
// 'error.user_exists' => 'User with this login already exists.',
'error.project_exists' => 'Proiectul cu acest nume exista deja.',
// TODO: translate the following.
// 'error.task_exists' => 'Task with this name already exists.',
// 'error.client_exists' => 'Client with this name already exists.',
// 'error.invoice_exists' => 'Invoice with this number already exists.',
// 'error.no_invoiceable_items' => 'There are no invoiceable items.',
// 'error.no_login' => 'No user with this login.',
'error.no_teams' => 'Baza de date este goala. Intra ca admin si adauga o noua echipa.',
'error.upload' => 'Eroare la upload-ul fisierului.',
// TODO: translate the following.
// 'error.range_locked' => 'Date range is locked.',
// 'error.mail_send' => 'Error sending mail.',
// 'error.no_email' => 'No email associated with this login.',
// 'error.uncompleted_exists' => 'Uncompleted entry already exists. Close or delete it.',
// 'error.goto_uncompleted' => 'Go to uncompleted entry.',
// 'error.overlap' => 'Time interval overlaps with existing records.',
// 'error.future_date' => 'Date is in future.',

// Labels for buttons.
'button.login' => 'Autentifica',
'button.now' => 'Acum',
'button.save' => 'Salveaza',
// TODO: translate the following.
// 'button.copy' => 'Copy',
'button.cancel' => 'Renunta',
'button.submit' => 'Trimite',
'button.add_user' => 'Adauga utilizator',
'button.add_project' => 'Adauga proiect',
// TODO: translate the following.
// 'button.add_task' => 'Add task',
'button.add_client' => 'Adauga client',
// TODO: translate the following.
// 'button.add_invoice' => 'Add invoice',
// 'button.add_option' => 'Add option',
'button.add' => 'Adauga',
'button.generate' => 'Genereaza',
// TODO: translate the following.
// 'button.reset_password' => 'Reset password',
'button.send' => 'Trimite',
'button.send_by_email' => 'Trimite pe e-mail',
'button.create_team' => 'Adauga echipa',
'button.export' => 'Exporta echipa',
'button.import' => 'Importa echipa',
// TODO: translate the following.
// 'button.close' => 'Close',
// 'button.stop' => 'Stop',

// Labels for controls on forms. Labels in this section are used on multiple forms.
// TODO: translate the following.
// 'label.team_name' => 'Team name',
// 'label.address' => 'Address',
'label.currency' => 'Moneda',
// TODO: translate the following.
// 'label.manager_name' => 'Manager name',
// 'label.manager_login' => 'Manager login',
'label.person_name' => 'Nume',
'label.thing_name' => 'Nume',
// TODO: translate the following.
// 'label.login' => 'Login',
'label.password' => 'Parola',
'label.confirm_password' => 'Confirma parola',
'label.email' => 'E-mail',
'label.cc' => 'Copie',
// TODO: translate the following.
// 'label.bcc' => 'Bcc',
'label.subject' => 'Subiect',
'label.date' => 'Data',
'label.start_date' => 'Data inceput',
'label.end_date' => 'Data sfarsit',
'label.user' => 'Utilizator',
'label.users' => 'Utilizatori',
'label.client' => 'Client',
'label.clients' => 'Clienti',
// TODO: translate the following.
// 'label.option' => 'Option',
'label.invoice' => 'Factura',
'label.project' => 'Proiect',
'label.projects' => 'Proiecte',
// TODO: translate the following.
// 'label.task' => 'Task',
// 'label.tasks' => 'Tasks',
// 'label.description' => 'Description',
'label.start' => 'Inceput',
'label.finish' => 'Sfarsit',
'label.duration' => 'Durata',
'label.note' => 'Nota',
// 'label.notes' => 'Notes',
// 'label.item' => 'Item',
// 'label.cost' => 'Cost',
// 'label.day_total' => 'Day total',
// 'label.week_total' => 'Week total',
// 'label.month_total' => 'Month total',
'label.today' => 'Astazi',
// TODO: translate the following.
// 'label.view' => 'View',
// TODO: confirm that label.edit and label.delete are translated correctly.
'label.edit' => 'Editează',
'label.delete' => 'Șterge',
'label.configure' => 'Configureaza',
'label.select_all' => 'Selecteaza tot',
'label.select_none' => 'Deselecteaza tot',
// TODO: translate the following.
// 'label.day_view' => 'Day view',
// 'label.week_view' => 'Week view',
'label.id' => 'ID',
// TODO: translate the following.
// 'label.language' => 'Language',
// 'label.decimal_mark' => 'Decimal mark',
// 'label.date_format' => 'Date format',
// 'label.time_format' => 'Time format',
// 'label.week_start' => 'First day of week',
'label.comment' => 'Comentariu',
'label.status' => 'Stare',
'label.tax' => 'Taxa',
'label.subtotal' => 'Subtotal',
'label.total' => 'Total',
// TODO: translate the following.
// 'label.client_name' => 'Client name',
// 'label.client_address' => 'Client address',
'label.or' => 'sau',
// TODO: translate the following.
// 'label.error' => 'Error',
// 'label.ldap_hint' => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
'label.required_fields' => '* date obligatorii',
'label.on_behalf' => 'in numele',
'label.role_manager' => '(manager)',
'label.role_comanager' => '(co-manager)',
'label.role_admin' => '(administrator)',
// TODO: translate the following.
// 'label.page' => 'Page',
// 'label.condition' => 'Condition',
// 'label.yes' => 'yes',
// 'label.no' => 'no',
// Labels for plugins (extensions to Time Tracker that provide additional features).
// TODO: translate the following.
// 'label.custom_fields' => 'Custom fields',
// 'label.monthly_quotas' => 'Monthly quotas',
// 'label.type' => 'Type',
// 'label.type_dropdown' => 'dropdown',
// 'label.type_text' => 'text',
// 'label.required' => 'Required',
'label.fav_report' => 'Raport favorite',
// TODO: translate the following.
// 'label.cron_schedule' => 'Cron schedule',
// 'label.what_is_it' => 'What is it?',
// 'label.expense' => 'Expense',
// 'label.quantity' => 'Quantity',
// 'label.paid_status' => 'Paid status',
// 'label.paid' => 'Paid',
// 'label.mark_paid' => 'Mark paid',
// 'label.week_note' => 'Week note',
// 'label.week_list' => 'Week list',

// Form titles.
// TODO: Improve titles for consistency, so that each title explains correctly what each
// page is about and is "consistent" from page to page, meaning that correct grammar is used everywhere.
// Compare with English file to see how it is done there and do Romanian titles similarly.
'title.login' => 'Autentificare',
'title.teams' => 'Echipe',
// TODO: translate the following.
// 'title.create_team' => 'Creating Team',
// 'title.edit_team' => 'Editing Team',
'title.delete_team' => 'Șterge echipa',
'title.reset_password' => 'Reseteaza parola',
// TODO: translate the following.
// 'title.change_password' => 'Changing Password',
'title.time' => 'Timpul',
'title.edit_time_record' => 'Editarea inregistrarii timpului',
'title.delete_time_record' => 'Ștergerea inregistrarii timpului',
// TODO: translate the following.
// 'title.expenses' => 'Expenses',
// 'title.edit_expense' => 'Editing Expense Item',
// 'title.delete_expense' => 'Deleting Expense Item',
// 'title.predefined_expenses' => 'Predefined Expenses',
// 'title.add_predefined_expense' => 'Adding Predefined Expense',
// 'title.edit_predefined_expense' => 'Editing Predefined Expense',
// 'title.delete_predefined_expense' => 'Deleting Predefined Expense',
'title.reports' => 'Rapoarte',
'title.report' => 'Raport',
// TODO: translate the following.
// 'title.send_report' => 'Sending Report',
'title.invoice' => 'Factura',
// TODO: translate the following.
// 'title.send_invoice' => 'Sending Invoice',
// 'title.charts' => 'Charts',
'title.projects' => 'Proiecte',
'title.add_project' => 'Adaugare proiect',
'title.edit_project' => 'Editare proiect',
'title.delete_project' => 'Stergere proiect',
// TODO: translate the following.
// 'title.tasks' => 'Tasks',
// 'title.add_task' => 'Adding Task',
// 'title.edit_task' => 'Editing Task',
// 'title.delete_task' => 'Deleting Task',
'title.users' => 'Utilizatori',
'title.add_user' => 'Adaugare utilizator',
'title.edit_user' => 'Editare utilizator',
'title.delete_user' => 'Stergere utilizator', // TODO: is this correct?
'title.clients' => 'Clienti',
'title.add_client' => 'Adaugare client', // TODO: is this correct?
'title.edit_client' => 'Editare client', // TODO: is this correct?
'title.delete_client' => 'Stergere client', // TODO: is this correct?
'title.invoices' => 'Facturi',
// TODO: translate the following.
// 'title.add_invoice' => 'Adding Invoice',
// 'title.view_invoice' => 'Viewing Invoice',
// 'title.delete_invoice' => 'Deleting Invoice',
// 'title.notifications' => 'Notifications',
// 'title.add_notification' => 'Adding Notification',
// 'title.edit_notification' => 'Editing Notification',
// 'title.delete_notification' => 'Deleting Notification',
// 'title.monthly_quotas' => 'Monthly Quotas',
// 'title.export' => 'Exporting Team Data',
// 'title.import' => 'Importing Team Data',
// 'title.options' => 'Options',
'title.profile' => 'Profil',
// TODO: translate the following.
// 'title.cf_custom_fields' => 'Custom Fields',
// 'title.cf_add_custom_field' => 'Adding Custom Field',
// 'title.cf_edit_custom_field' => 'Editing Custom Field',
// 'title.cf_delete_custom_field' => 'Deleting Custom Field',
// 'title.cf_dropdown_options' => 'Dropdown Options',
// 'title.cf_add_dropdown_option' => 'Adding Option',
// 'title.cf_edit_dropdown_option' => 'Editing Option',
// 'title.cf_delete_dropdown_option' => 'Deleting Option',
// NOTE TO TRANSLATORS: Locking is a feature to lock records from modifications (ex: weekly on Mondays we lock all previous weeks).
// It is also a name for the Locking plugin on the Team profile page.
// 'title.locking' => 'Locking',
// 'title.week_view' => 'Week View',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- toate ---',
'dropdown.no' => '--- nu ---',
// TODO: translate the following.
// 'dropdown.current_day' => 'today',
// 'dropdown.previous_day' => 'yesterday',
// 'dropdown.selected_day' => 'day',
'dropdown.current_week' => 'saptamana curenta',
'dropdown.previous_week' => 'saptamana trecuta',
'dropdown.selected_week' => 'saptamana',
'dropdown.current_month' => 'luna curenta',
'dropdown.previous_month' => 'luna trecuta',
'dropdown.selected_month' => 'luna',
// TODO: translate the following.
// 'dropdown.current_year' => 'this year',
// 'dropdown.previous_year' => 'previous year',
// 'dropdown.selected_year' => 'year',
// 'dropdown.all_time' => 'all time',
'dropdown.projects' => 'proiecte',
// TODO: translate the following.
// 'dropdown.tasks' => 'tasks',
'dropdown.clients' => 'clienti',
// TODO: translate the following.
// 'dropdown.select' => '--- select ---',
// 'dropdown.select_invoice' => '--- select invoice ---',
'dropdown.status_active' => 'activ',
'dropdown.status_inactive' => 'inactiv',
// TODO: translate the following.
// 'dropdown.delete' => 'delete',
// 'dropdown.do_not_delete' => 'do not delete',
// 'dropdown.paid' => 'paid',
// 'dropdown.not_paid' => 'not paid',

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Parola pierduta?',
// TODO: translate the following.
// 'form.login.about' => 'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> is a simple, easy to use, open source time tracking system.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Cererea de resetare a parolei a fost trimisa.', // TODO: add "by email" to match the English string.
'form.reset_password.email_subject' => 'Anuko Time Tracker - cerere de resetare a parolei',
// TODO: translate the ending of following.
'form.reset_password.email_body' => "Draga Utilizator,\n\nCineva, posibil tu, a cerut resetarea parolei pentru contul Anuko Time Tracker. Te rog, viziteaza acesta legatura daca doresti sa iti resetezi parola.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
// TODO: translate the following.
// 'form.change_password.tip' => 'Type new password and click on Save.',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(hh:mm sau 0.0h)',
// TODO: translate the following.
// 'form.time.billable' => 'Billable',
// 'form.time.uncompleted' => 'Uncompleted',
// 'form.time.remaining_quota' => 'Remaining quota',
// 'form.time.over_quota' => 'Over quota',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Aceasta inregistrare a fost salvata numei cu timpul de inceput. Nu este o eroare.',

// Week view form. See example at https://timetracker.anuko.com/week.php.
// TODO: translate the following.
// 'form.week.new_entry' => 'New entry',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Salveaza ca favorit',
// TODO: translate the following.
// 'form.reports.confirm_delete' => 'Are you sure you want to delete this favorite report?',
// 'form.reports.include_billable' => 'billable',
// 'form.reports.include_not_billable' => 'not billable',
// 'form.reports.include_invoiced' => 'invoiced',
// 'form.reports.include_not_invoiced' => 'not invoiced',
'form.reports.select_period' => 'Alege perioada',
'form.reports.set_period' => 'sau introdu intervalul de date',
'form.reports.show_fields' => 'Arata campuri',
'form.reports.group_by' => 'Grupat dupa',
'form.reports.group_by_no' => '--- fara grupare ---',
'form.reports.group_by_date' => 'data',
'form.reports.group_by_user' => 'utilizator',
'form.reports.group_by_client' => 'client',
'form.reports.group_by_project' => 'proiect',
// TODO: translate the following.
// 'form.reports.group_by_task' => 'task',
'form.reports.totals_only' => 'Numai totaluri',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Exporta',
// TODO: translate the following.
// 'form.report.assign_to_invoice' => 'Assign to invoice',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'Numar factura',
'form.invoice.person' => 'Persoana',

// Deleting Invoice form. See example at https://timetracker.anuko.com/invoice_delete.php
// 'form.invoice.invoice_to_delete' => 'Invoice to delete',
// 'form.invoice.invoice_entries' => 'Invoice entries',
// 'form.invoice.confirm_deleting_entries' => 'Please confirm deleting invoice entries from Time Tracker.',

// Charts form. See example at https://timetracker.anuko.com/charts.php
// TODO: translate the following.
// 'form.charts.interval' => 'Interval',
// 'form.charts.chart' => 'Chart',

// Projects form. See example at https://timetracker.anuko.com/projects.php
// TODO: translate the following.
// 'form.projects.active_projects' => 'Active Projects',
// 'form.projects.inactive_projects' => 'Inactive Projects',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
// TODO: translate the following.
// 'form.tasks.active_tasks' => 'Active Tasks',
// 'form.tasks.inactive_tasks' => 'Inactive Tasks',

// Users form. See example at https://timetracker.anuko.com/users.php
// TODO: translate the following.
// 'form.users.active_users' => 'Active Users',
// 'form.users.inactive_users' => 'Inactive Users',
// 'form.users.uncompleted_entry' => 'User has an uncompleted time entry',
'form.users.role' => 'Functie', // TODO: is "Rol" a better term here?
'form.users.manager' => 'Manager',
'form.users.comanager' => 'Co-manager',
'form.users.rate' => 'Rată',
'form.users.default_rate' => 'Pret pe ora implicit',

// Clients form. See example at https://timetracker.anuko.com/clients.php
// TODO: translate the following.
// 'form.clients.active_clients' => 'Active Clients',
// 'form.clients.inactive_clients' => 'Inactive Clients',

// Deleting Client form. See example at https://timetracker.anuko.com/client_delete.php
// TODO: translate the following.
// 'form.client.client_to_delete' => 'Client to delete',
// 'form.client.client_entries' => 'Client entries',

// Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'Poti exporta toate datele despre echipa intr-un fisier xml. Acesta poate fi folositor daca transferi datele pe alt server.',
'form.export.compression' => 'Compresie',
// TODO: translate the following.
// 'form.export.compression_none' => 'none',
// 'form.export.compression_bzip' => 'bzip',

// Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
'form.import.hint' => 'Importa date echipa dintr-un fisier xml.',
'form.import.file' => 'Alege fisier',
'form.import.success' => 'Importul s-a incheiat cu succes.',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
// TODO: check form.teams.hint for accuracy.
'form.teams.hint' => 'Adauga o noua echipa prin adaugarea unui nou cont de tip manager.<br>Deasemeni poti importa datele despre echipa dintr-un fisier xml generat de un alt server Anuko Time Tracker (nu sunt permise duplicate pentru login).',

// Profile form. See example at https://timetracker.anuko.com/profile_edit.php.
// TODO: translate the following.
// 'form.profile.12_hours' => '12 hours',
// 'form.profile.24_hours' => '24 hours',
// 'form.profile.show_holidays' => 'Show holidays',
// 'form.profile.tracking_mode' => 'Tracking mode',
// 'form.profile.mode_time' => 'time',
// 'form.profile.mode_projects' => 'projects',
// 'form.profile.mode_projects_and_tasks' => 'projects and tasks',
// 'form.profile.record_type' => 'Record type',
// 'form.profile.type_all' => 'all',
// 'form.profile.type_start_finish' => 'start and finish',
// 'form.profile.type_duration' => 'duration',
// 'form.profile.punch_in_mode' => 'Punch in mode',
// 'form.profile.allow_overlap' => 'Allow overlap',
// 'form.profile.future_entries' => 'Future entries',
// 'form.profile.uncompleted_indicators' => 'Uncompleted indicators',
// 'form.profile.plugins' => 'Plugins',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'De la',
'form.mail.to' => 'Catre',
// TODO: translate the following.
// 'form.mail.report_subject' => 'Time Tracker Report',
// 'form.mail.footer' => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
// 'form.mail.report_sent' => 'Report sent.',
'form.mail.invoice_sent' => 'Factura trimisa.',

// Quotas configuration form.
// TODO: translate the following.
// 'form.quota.year' => 'Year',
// 'form.quota.month' => 'Month',
// 'form.quota.quota' => 'Quota',
// 'form.quota.workday_hours' => 'Hours in work day',
// 'form.quota.hint' => 'If values are empty, quotas are calculated automatically based on workday hours and holidays.',
);
