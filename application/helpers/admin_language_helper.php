<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function lang_phrase($field) {



    // ENGLISH
    // login
    $language['en']['cms_title'] = 'Content Management System';
    $language['en']['cms_last_login'] = 'Last login';
    $language['en']['cms_loading'] = 'Loading CMS';
    $language['en']['login_username'] = 'Username';
    $language['en']['login_password'] = 'Password';
    $language['en']['login_remember'] = 'Remember me';
    $language['en']['login_remember_msg'] = 'For security reasons, only the username will be remembered.';
    $language['en']['login_btn_login'] = 'Log in';
    $language['en']['login_btn_login_load'] = '<span class=\'glyphicon glyphicon-log-in\'></span>&nbsp; Logging in...';
    $language['en']['login_btn_forgot'] = 'I forgot my password';
    // forgot and reset password
    $language['en']['forgot_title'] = 'I forgot my password!';
    $language['en']['forgot_username'] = 'Username';
    $language['en']['forgot_username_placeholder'] = 'What\'s your username?';
    $language['en']['forgot_btn_reset'] = 'Reset my password';
    $language['en']['reset_title'] = 'Reset my password';
    $language['en']['reset_msg_start'] = 'Hello <strong>';
    $language['en']['reset_msg_end'] = '</strong>. Here you can provide a new password, so you can log in the CMS.';
    $language['en']['reset_new_pass'] = 'New Password';
    $language['en']['reset_new_pass_repeat'] = 'Repeat new Password';
    $language['en']['reset_btn'] = 'Please, reset my password';
    // menu
    $language['en']['menu_title'] = 'Logged in as ';
    $language['en']['menu_user'] = 'User info ';
    $language['en']['menu_manage'] = 'Manage users';
    $language['en']['menu_time'] = 'Time log';
    $language['en']['menu_cache'] = 'Clear cached data';
    $language['en']['menu_db_backup'] = 'Database backup';
    $language['en']['menu_feedback'] = 'Send feedback';
    $language['en']['menu_help'] = 'Help';
    $language['en']['menu_open'] = 'Open website';
    $language['en']['menu_logout'] = 'Logout';
    // list
    $language['en']['create_item'] = 'Create item';
    $language['en']['export_csv'] = 'Export CSV file';
    $language['en']['export_xls'] = 'Export XLS file';
    $language['en']['filter'] = 'Filter results';
    $language['en']['actions'] = 'Actions';
    $language['en']['all_items'] = 'All items';
    $language['en']['pager_page'] = 'Page';
    $language['en']['pager_of'] = 'of';
    $language['en']['pager_first'] = 'First';
    $language['en']['pager_previous'] = 'Previous';
    $language['en']['pager_next'] = 'Next';
    $language['en']['pager_last'] = 'Last';
    $language['en']['btn_status'] = 'Status';
    $language['en']['btn_edit'] = 'Edit';
    $language['en']['btn_delete'] = 'Delete';
    // forms
    $language['en']['form_loading'] = 'Loading info...';
    $language['en']['form_btn_loading'] = 'Sending...';
    $language['en']['form_create_title_btn'] = 'Create item';
    $language['en']['form_edit_title_btn'] = 'Edit item';
    $language['en']['form_delete_title'] = 'Delete item';
    $language['en']['form_delete_btn'] = 'Delete item';
    $language['en']['form_delete_msg'] = 'Are you sure you want to delete this item?';
    $language['en']['form_close_btn'] = 'Close';
    // gallery
    $language['en']['gallery_item_title'] = 'Item info';
    $language['en']['gallery_title'] = 'Gallery';
    $language['en']['gallery_drag'] = 'Drop photos or click to browse';
    $language['en']['gallery_while'] = 'This could take a while';
    $language['en']['gallery_deleting'] = 'Deleting';
    $language['en']['gallery_changing'] = 'Changing state';
    $language['en']['gallery_uploading'] = 'Uploading photos';
    $language['en']['gallery_uploaded'] = 'Uploading 0 of 0 photos';
    $language['en']['gallery_uploaded1'] = 'Uploading';
    $language['en']['gallery_uploaded2'] = 'of';
    $language['en']['gallery_uploaded3'] = 'photos';
    $language['en']['gallery_selectall'] = 'Select all';
    $language['en']['gallery_unselectall'] = 'Unselect all';
    $language['en']['gallery_delete'] = 'Delete';
    $language['en']['gallery_highlight'] = 'Highlight';
    $language['en']['gallery_unhighlight'] = 'Unhighlight';
    // help
    $language['en']['help_menu_title'] = 'Top menu';
    $language['en']['help_user_title'] = 'User info';
    $language['en']['help_user_msg'] = 'Review & update your information.';
    $language['en']['help_manage_title'] = 'Manage users';
    $language['en']['help_manage_msg'] = 'Create, update and delete CMS\'s users.';
    $language['en']['help_time_title'] = 'Time log';
    $language['en']['help_time_msg'] = 'This is the time that you are using the system since your last login.';
    $language['en']['help_google_title'] = 'Google Analytics';
    $language['en']['help_google_msg'] = 'If this featured is turned on, you can review last month\'s visits using Google Analytics stats.';
    $language['en']['help_cache_title'] = 'Clear cached data';
    $language['en']['help_cache_msg'] = 'If the website uses cached data, this button resets that feature to reads new database information instantly.';
    $language['en']['help_db_backup_title'] = 'Database backup';
    $language['en']['help_db_backup_msg'] = 'This button generates and send a database backup to your email.';
    $language['en']['help_feedback_title'] = 'Send feedback';
    $language['en']['help_feedback_msg'] = 'You can send messages to the dev team. This could be a bug, a suggestion or even a thank you!';
    $language['en']['help_help_title'] = 'Help';
    $language['en']['help_help_msg'] = 'This page.';
    $language['en']['help_open_title'] = 'Open website';
    $language['en']['help_open_msg'] = 'Open the website in a new window.';
    $language['en']['help_logout_title'] = 'Logout';
    $language['en']['help_logout_msg'] = 'You can logout from the CMS with this button.';
    $language['en']['help_login_title'] = 'Login';
    $language['en']['help_forgot_title'] = 'I forgot my password';
    $language['en']['help_forgot_msg'] = 'If you forgot your password, you can access this section. Tell your user and the system will send a password reset link to your email.';
    $language['en']['help_buttons_title'] = 'Buttons / Actions';
    $language['en']['help_status_title'] = 'Status';
    $language['en']['help_status_msg'] = 'The item is displayed in the website.';
    $language['en']['help_status_msg2'] = 'The item is not displayed in the website.';
    $language['en']['help_edit_title'] = 'Edit';
    $language['en']['help_edit_msg'] = 'Update the item information.';
    $language['en']['help_delete_title'] = 'Delete';
    $language['en']['help_delete_msg'] = 'Delete the item from the website.';
    $language['en']['help_filter_msg'] = 'Filter the results with some keyword/s.';
    // analytics
    $language['en']['ga_btn'] = 'Go to Google Analytics to view the full report';
    $language['en']['ga_msg'] = 'Responsible account of GA';
    // feedback
    $language['en']['feedback_title'] = 'Send a message to the dev team';
    $language['en']['feedback_subject'] = 'Subject';
    $language['en']['feedback_message'] = 'Message';
    $language['en']['feedback_close'] = 'Close';
    $language['en']['feedback_send'] = 'Send message';
    $language['en']['feedback_send_loading'] = 'Sending message...';
    // profile
    $language['en']['profile_title'] = 'User info';
    $language['en']['profile_name'] = 'Name';
    $language['en']['profile_email'] = 'Email';
    $language['en']['profile_email_msg'] = 'This email account is used for security and <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>.';
    $language['en']['profile_gravatar_msg'] = 'Change your avatar at gravatar.com';
    $language['en']['profile_username'] = 'Username';
    $language['en']['profile_new_pass'] = 'New password';
    $language['en']['profile_new_pass_2'] = 'Repeat new password';
    $language['en']['profile_new_pass_msg'] = 'If you don\'t want to change your password, leave both fields empty.';
    $language['en']['profile_sections'] = 'Admin sections';
    $language['en']['profile_theme'] = 'Theme';
    $language['en']['profile_theme_default'] = 'Default';
    $language['en']['profile_theme_blue'] = 'Blue';
    $language['en']['profile_theme_green'] = 'Green';
    $language['en']['profile_theme_yellow'] = 'Yellow';
    $language['en']['profile_theme_pink'] = 'Pink';
    $language['en']['profile_save_btn'] = 'Update user info';
    $language['en']['profile_save_btn_loading'] = 'Updating...';
    // manage users
    $language['en']['manage_title'] = 'Manage admin users';
    $language['en']['manage_create_title'] = 'Create admin user';
    $language['en']['manage_edit_title'] = 'Edit admin user';
    $language['en']['manage_close'] = 'Close';
    $language['en']['manage_loading'] = 'Sending...';
    $language['en']['manage_user'] = 'User';
    $language['en']['manage_name'] = 'Name';
    $language['en']['manage_email'] = 'Email';
    $language['en']['manage_password'] = 'Password';
    $language['en']['manage_permissions'] = 'Admin permissions';
    $language['en']['manage_delete_title_btn'] = 'Delete admin user';
    $language['en']['manage_delete_msg'] = 'Are you sure you want to delete this admin user?';
    // alerts
    $language['en']['alert_not_logged_in'] = '<strong>Warning!</strong> You must be logged in to access the system and make changes.';
    $language['en']['alert_login_wrong'] = '<strong>Ouch!</strong> The username or password are incorrect. Review the data and try again.';
    $language['en']['alert_forgot_invalid'] = '<strong>Hey!</strong> Please provide a valid username.';
    $language['en']['alert_forgot_wrong'] = '<strong>Ouch!</strong> We don\'t have that username in our system.';
    $language['en']['alert_forgot_success'] = '<strong>Sent!</strong> In a few minutes you\'ll receive an email with info to reset your password.';
    $language['en']['alert_reset_invalid'] = '<strong>Ouch!</strong> Please provide a valid password.';
    $language['en']['alert_reset_error'] = '<strong>Ouch!</strong> Invalid password reset value.';
    $language['en']['alert_reset_success'] = '<strong>Hooray!</strong> You have saved a new password!';
    $language['en']['alert_create_success'] = '<strong>Success!</strong> The item was created without issues.';
    $language['en']['alert_edit_success'] = '<strong>Success!</strong> The item was updated without issues.';
    $language['en']['alert_delete_success'] = '<strong>Success!</strong> The item was deleted without issues.';
    $language['en']['alert_password_profile_wrong'] = '<strong>Error!</strong> New passwords are not the same.';
    $language['en']['alert_edit_profile_success'] = '<strong>Success!</strong> The user info was updated without issues.';
    $language['en']['alert_feedback_success'] = '<strong>Message sent!</strong> Thanks for writing. Soon we\'ll be answering your comments.';
    $language['en']['alert_db_backup_success'] = '<strong>Success!</strong> The backup was made and an email was sent with the link.';
    $language['en']['alert_cache_success'] = '<strong>Success!</strong> Site cache cleared.';



    // SPANISH
    // login
    $language['es']['cms_title'] = 'Administrador de Contenidos';
    $language['es']['cms_last_login'] = 'Último ingreso';
    $language['es']['cms_loading'] = 'Cargando CMS';
    $language['es']['login_username'] = 'Usuario';
    $language['es']['login_password'] = 'Contraseña';
    $language['es']['login_remember'] = 'Recordarme';
    $language['es']['login_remember_msg'] = 'Por razones de seguridad, sólo el usuario será recordado.';
    $language['es']['login_btn_login'] = 'Ingresar';
    $language['es']['login_btn_login_load'] = '<span class=\'glyphicon glyphicon-log-in\'></span>&nbsp; Ingresando...';
    $language['es']['login_btn_forgot'] = 'Olvidé mi contraseña';
    // forgot and reset password
    $language['es']['forgot_title'] = '¡Olvidé mi contraseña!';
    $language['es']['forgot_username'] = 'Usuario';
    $language['es']['forgot_username_placeholder'] = '¿Cuál es tu usuario?';
    $language['es']['forgot_btn_reset'] = 'Reseteá mi contraseña';
    $language['es']['reset_title'] = 'Reseteá mi contraseña';
    $language['es']['reset_msg_start'] = 'Hola <strong>';
    $language['es']['reset_msg_end'] = '</strong>. Aquí puedes proveer una nueva contraseña, para que puedas ingresar en el CMS.';
    $language['es']['reset_new_pass'] = 'Contraseña nueva';
    $language['es']['reset_new_pass_repeat'] = 'Repetir contraseña nueva';
    $language['es']['reset_btn'] = 'Por favor, reseteá mi contraseña';
    // menu
    $language['es']['menu_title'] = 'Registrado como ';
    $language['es']['menu_user'] = 'Info del usuario ';
    $language['es']['menu_manage'] = 'Administrar usuarios';
    $language['es']['menu_time'] = 'Registro de tiempo';
    $language['es']['menu_cache'] = 'Borrar caché web';
    $language['es']['menu_db_backup'] = 'Backup de la base de datos';
    $language['es']['menu_feedback'] = 'Enviar un mensaje';
    $language['es']['menu_help'] = 'Ayuda';
    $language['es']['menu_open'] = 'Abrir sitio web';
    $language['es']['menu_logout'] = 'Salir';
    // list
    $language['es']['create_item'] = 'Crear item';
    $language['es']['export_csv'] = 'Exportar en formato CSV';
    $language['es']['export_xls'] = 'Exportar en formato XLS';
    $language['es']['filter'] = 'Filtrar resultados';
    $language['es']['actions'] = 'Acciones';
    $language['es']['all_items'] = 'Todos los items';
    $language['es']['pager_page'] = 'Página';
    $language['es']['pager_of'] = 'de';
    $language['es']['pager_first'] = 'Primera';
    $language['es']['pager_previous'] = 'Anterior';
    $language['es']['pager_next'] = 'Siguiente';
    $language['es']['pager_last'] = 'Última';
    $language['es']['btn_status'] = 'Estado';
    $language['es']['btn_edit'] = 'Editar';
    $language['es']['btn_delete'] = 'Eliminar';
    // forms
    $language['es']['form_loading'] = 'Cargando info...';
    $language['es']['form_btn_loading'] = 'Enviando...';
    $language['es']['form_create_title_btn'] = 'Crear item';
    $language['es']['form_edit_title_btn'] = 'Editar item';
    $language['es']['form_delete_title'] = 'Eliminar item';
    $language['es']['form_delete_btn'] = 'Eliminar item';
    $language['es']['form_delete_msg'] = '¿Estás seguro que quieres eliminar este item?';
    $language['es']['form_close_btn'] = 'Cerrar';
    // gallery
    $language['es']['gallery_item_title'] = 'Información';
    $language['es']['gallery_title'] = 'Galería';
    $language['es']['gallery_drag'] = 'Soltar fotos o click aquí para elegir';
    $language['es']['gallery_while'] = 'Esto puede tomar un momento';
    $language['es']['gallery_deleting'] = 'Eliminando';
    $language['es']['gallery_changing'] = 'Cambiando estado';
    $language['es']['gallery_uploading'] = 'Subiendo fotos';
    $language['es']['gallery_uploaded'] = 'Subidas 0 de 0 fotos';
    $language['es']['gallery_uploaded1'] = 'Subidas';
    $language['es']['gallery_uploaded2'] = 'de';
    $language['es']['gallery_uploaded3'] = 'fotos';
    $language['es']['gallery_selectall'] = 'Seleccionar todos';
    $language['es']['gallery_unselectall'] = 'Deseleccionar todos';
    $language['es']['gallery_delete'] = 'Eliminar';
    $language['es']['gallery_highlight'] = 'Destacar';
    $language['es']['gallery_unhighlight'] = 'Quitar el destacado';
    // help
    $language['es']['help_menu_title'] = 'Menú superior';
    $language['es']['help_user_title'] = 'Info del usuario';
    $language['es']['help_user_msg'] = 'Revisar y actualizar su información.';
    $language['es']['help_manage_title'] = 'Administrar usuarios';
    $language['es']['help_manage_msg'] = 'Crear, modificar y eliminar usuarios del CMS.';
    $language['es']['help_time_title'] = 'Registro de tiempo';
    $language['es']['help_time_msg'] = 'Muestra el tiempo que estuvo utilizando el sistema desde su último acceso.';
    $language['es']['help_google_title'] = 'Google Analytics';
    $language['es']['help_google_msg'] = 'Si esta función está habilitada, se pueden revisar las visitas del mes pasado utilizando las estadísticas de Google Analytics.';
    $language['es']['help_cache_title'] = 'Borrar caché web';
    $language['es']['help_cache_msg'] = 'Si el sitio web utiliza un sistema de caché, este botón borra el caché web, para leer al instante nueva información de la base de datos.';
    $language['es']['help_db_backup_title'] = 'Backup de la base de datos';
    $language['es']['help_db_backup_msg'] = 'Este botón genera y envía a su email una copia de la base de datos.';
    $language['es']['help_feedback_title'] = 'Enviar un mensaje';
    $language['es']['help_feedback_msg'] = 'Puede enviar mensajes al equipo de desarrollo. Podría ser el aviso de un error, una sugerencia o siquiera un gracias!';
    $language['es']['help_help_title'] = 'Ayuda';
    $language['es']['help_help_msg'] = 'Esta página.';
    $language['es']['help_open_title'] = 'Abrir sitio web';
    $language['es']['help_open_msg'] = 'Abre el sitio web en una nueva ventana.';
    $language['es']['help_logout_title'] = 'Salir';
    $language['es']['help_logout_msg'] = 'Podés salir del CMS con este botón.';
    $language['es']['help_login_title'] = 'Ingreso al sistema';
    $language['es']['help_forgot_title'] = 'Olvidé mi contraseña';
    $language['es']['help_forgot_msg'] = 'Si olvidaste tu contraseña, podés acceder a esta sección. Conociendo tu usuario, el sistema enviará un link a tu email para resetear tu contraseña.';
    $language['es']['help_buttons_title'] = 'Botones / Acciones';
    $language['es']['help_status_title'] = 'Estado';
    $language['es']['help_status_msg'] = 'Este item es visible en el sitio web.';
    $language['es']['help_status_msg2'] = 'Este item no es visible en el sitio web.';
    $language['es']['help_edit_title'] = 'Editar';
    $language['es']['help_edit_msg'] = 'Modifica la información del item.';
    $language['es']['help_delete_title'] = 'Eliminar';
    $language['es']['help_delete_msg'] = 'Elimina el item del sitio web.';
    $language['es']['help_filter_msg'] = 'Filtra los resultados utilizando las palabras ingresadas.';
    // analytics
    $language['es']['ga_btn'] = 'Ir a Google Analytics para ver un reporte completo';
    $language['es']['ga_msg'] = 'Cuenta responsable de GA';
    // feedback
    $language['es']['feedback_title'] = 'Enviar un mensaje al equipo de desarrollo';
    $language['es']['feedback_subject'] = 'Asunto';
    $language['es']['feedback_message'] = 'Mensaje';
    $language['es']['feedback_close'] = 'Cerrar';
    $language['es']['feedback_send'] = 'Enviar mensaje';
    $language['es']['feedback_send_loading'] = 'Enviando mensaje...';
    // profile
    $language['es']['profile_title'] = 'Info del usuario';
    $language['es']['profile_name'] = 'Nombre';
    $language['es']['profile_email'] = 'Email';
    $language['es']['profile_email_msg'] = 'Esta cuenta de email se utiliza para seguridad y para <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>.';
    $language['es']['profile_gravatar_msg'] = 'Cambiá tu avatar en gravatar.com';
    $language['es']['profile_username'] = 'Usuario';
    $language['es']['profile_new_pass'] = 'Contraseña nueva';
    $language['es']['profile_new_pass_2'] = 'Repetir contraseña nueva';
    $language['es']['profile_new_pass_msg'] = 'Si no querés cambiar la contraseña, dejá ambos campos vacíos.';
    $language['es']['profile_sections'] = 'Secciones de CMS';
    $language['es']['profile_theme'] = 'Diseño';
    $language['es']['profile_theme_default'] = 'Por defecto';
    $language['es']['profile_theme_blue'] = 'Azul';
    $language['es']['profile_theme_green'] = 'Verde';
    $language['es']['profile_theme_yellow'] = 'Amarillo';
    $language['es']['profile_theme_pink'] = 'Rosa';
    $language['es']['profile_save_btn'] = 'Actualizar la info del usuario';
    $language['es']['profile_save_btn_loading'] = 'Actualizando...';
    // manage users
    $language['es']['manage_title'] = 'Administrar usuarios del CMS';
    $language['es']['manage_create_title'] = 'Crear un usuario del CMS';
    $language['es']['manage_edit_title'] = 'Editar un usuario del CMS';
    $language['es']['manage_close'] = 'Cerrar';
    $language['es']['manage_loading'] = 'Enviando...';
    $language['es']['manage_user'] = 'Usuario';
    $language['es']['manage_name'] = 'Nombre';
    $language['es']['manage_email'] = 'Email';
    $language['es']['manage_password'] = 'Contraseña';
    $language['es']['manage_permissions'] = 'Permisos del CMS';
    $language['es']['manage_delete_title_btn'] = 'Eliminar usuario del CMS';
    $language['es']['manage_delete_msg'] = '¿Estás seguro que quieres eliminar al usuario?';
    // alerts
    $language['es']['alert_not_logged_in'] = '<strong>¡Advertencia!</strong> Debes estar registrado en el sistema para acceder y realizar cambios.';
    $language['es']['alert_login_wrong'] = '<strong>¡Ouch!</strong> El usuario o la contraseña son incorrectas. Revisá la información y vuelve a intentar.';
    $language['es']['alert_forgot_invalid'] = '<strong>¡Ey!</strong> Por favor, completá un usuario válido.';
    $language['es']['alert_forgot_wrong'] = '<strong>¡Ouch!</strong> No tenemos ese usuario en nuestro sistema.';
    $language['es']['alert_forgot_success'] = '<strong>¡Enviado!</strong> En pocos minutos vas a recibir un email con información para resetear tu contraseña.';
    $language['es']['alert_reset_invalid'] = '<strong>¡Ouch!</strong> Por favor, completá una contraseña válida.';
    $language['es']['alert_reset_error'] = '<strong>¡Ouch!</strong> Contraseña nueva inválida.';
    $language['es']['alert_reset_success'] = '<strong>¡Viva!</strong> ¡Guardaste una nueva contraseña!';
    $language['es']['alert_create_success'] = '<strong>¡Éxito!</strong> El item fue creado sin problemas.';
    $language['es']['alert_edit_success'] = '<strong>¡Éxito!</strong> El item fue modificado sin problemas.';
    $language['es']['alert_delete_success'] = '<strong>¡Éxito!</strong> El item fue eliminado sin problemas.';
    $language['es']['alert_password_profile_wrong'] = '<strong>¡Error!</strong> Las nuevas contraseñas no son iguales.';
    $language['es']['alert_edit_profile_success'] = '<strong>¡Éxito!</strong> La info del usuario fue modificada sin problemas.';
    $language['es']['alert_feedback_success'] = '<strong>¡Mensaje enviado!</strong> Gracias por escribir. Pronto estaremos respondiendo tus comentarios.';
    $language['es']['alert_db_backup_success'] = '<strong>¡Éxito!</strong> Se realizó un backup y se envió el link a tu email.';
    $language['es']['alert_cache_success'] = '<strong>¡Éxito!</strong> Se borró el caché del sitio web.';



    return $language[ADMIN_LANGUAGE][$field];
}

/* End of file admin_language_helper.php */
/* Location: ./application/helpers/admin_language_helper.php */