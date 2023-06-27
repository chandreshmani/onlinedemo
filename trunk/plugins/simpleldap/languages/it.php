<?php


$lang["simpleldap_ldaptype"]='Fornitore di directory.';
$lang["ldapserver"]='Server LDAP.';
$lang["ldap_encoding"]='Codifica dati ricevuta dal server LDAP (impostata se non è UTF-8 e i dati non vengono visualizzati correttamente - ad esempio il nome visualizzato).';
$lang["domain"]='Dominio AD, se multiplo separare con punto e virgola.';
$lang["emailsuffix"]='Suffisso email - utilizzato se non vengono trovati dati attributi email.';
$lang["port"]='Porta';
$lang["basedn"]='DN di base. Se gli utenti si trovano in più DN, separare con punto e virgola.';
$lang["loginfield"]='Campo di accesso';
$lang["usersuffix"]='Suffisso utente (un punto verrà aggiunto davanti al suffisso)';
$lang["groupfield"]='Campo di Gruppo.';
$lang["createusers"]='Creare utenti.';
$lang["fallbackusergroup"]='Gruppo Utente di Ripiego';
$lang["ldaprsgroupmapping"]='Mappatura Gruppi LDAP-ResourceSpace';
$lang["ldapvalue"]='Valore LDAP';
$lang["rsgroup"]='Gruppo ResourceSpace';
$lang["addrow"]='Aggiungi riga.';
$lang["email_attribute"]='Attributo da utilizzare per l\'indirizzo email.';
$lang["phone_attribute"]='Attributo da utilizzare per il numero di telefono.';
$lang["simpleldap_telephone"]='Telefono.';
$lang["simpleldap_unknown"]='sconosciuto';
$lang["simpleldap_update_group"]='Aggiorna il gruppo utente ad ogni accesso. Se non si utilizzano i gruppi AD per determinare l\'accesso, impostare questa opzione su falso in modo che gli utenti possano essere promossi manualmente.';
$lang["simpleldappriority"]='Priorità (un numero più alto avrà la precedenza)';
$lang["simpleldap_create_new_match_email"]='Corrispondenza email: Verifica se l\'email LDAP corrisponde a un\'email di un account RS esistente e adotta quell\'account. Funzionerà anche se "Crea utenti" è disabilitato.';
$lang["simpleldap_allow_duplicate_email"]='Consentire la creazione di nuovi account se esistono account esistenti con lo stesso indirizzo email? (questo viene annullato se la corrispondenza dell\'email è impostata sopra e viene trovata una corrispondenza)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - Tentativo di accesso conflittuale con l\'email di login.';
$lang["simpleldap_multiple_email_match_text"]='Un nuovo utente LDAP ha effettuato l\'accesso ma esistono già più di un account con lo stesso indirizzo email:';
$lang["simpleldap_notification_email"]='Indirizzo di notifica, ad esempio se vengono registrati indirizzi email duplicati. Se vuoto, nessuna notifica verrà inviata.';
$lang["simpleldap_duplicate_email_error"]='Esiste già un account con lo stesso indirizzo email. Si prega di contattare l\'amministratore.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - nuovo utente senza mappatura di gruppo.';
$lang["simpleldap_no_group_match"]='Un nuovo utente si è registrato ma non c\'è alcun gruppo di ResourceSpace mappato a nessun gruppo di directory a cui appartiene.';
$lang["simpleldap_usermemberof"]='L\'utente è membro dei seguenti gruppi di directory: -';
$lang["simpleldap_test"]='Verifica configurazione LDAP';
$lang["simpleldap_testing"]='Verifica della configurazione LDAP.';
$lang["simpleldap_connection"]='Connessione al server LDAP';
$lang["simpleldap_bind"]='Collegarsi al server LDAP';
$lang["simpleldap_username"]='Nome utente/DN utente';
$lang["simpleldap_password"]='Password';
$lang["simpleldap_test_auth"]='Autenticazione di prova.';
$lang["simpleldap_domain"]='Dominio.';
$lang["simpleldap_displayname"]='Nome visualizzato';
$lang["simpleldap_memberof"]='Membro di';
$lang["simpleldap_test_title"]='Test';
$lang["simpleldap_result"]='Risultato';
$lang["simpleldap_retrieve_user"]='Recupera dettagli utente.';
$lang["simpleldap_externsion_required"]='Il modulo PHP LDAP deve essere abilitato affinché questo plugin funzioni.';
$lang["simpleldap_usercomment"]='Creato dal plugin SimpleLDAP.';
$lang["simpleldap_usermatchcomment"]='Aggiornato a utente LDAP tramite SimpleLDAP.';
$lang["origin_simpleldap"]='Plugin SimpleLDAP';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='Non verificare il FQDN del server rispetto al CN del certificato.';