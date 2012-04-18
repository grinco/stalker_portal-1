<?php
/**
 * Please do not edit this file.
 * For localization, use the Poedit.
 */

$words = array();

// weather
$words['weather_comfort'] = _('Comfort');
$words['weather_pressure'] = _('Pressure');
$words['weather_mmhg'] = _('mm Hg');
$words['weather_wind'] = _('Wind');
$words['weather_speed'] = _('m/s');
$words['weather_humidity'] = _('Humidity');
$words['current_weather_unavailable'] = _('Current weather unavailable');

// karaoke
$words['karaoke_view'] = _('VIEW');
$words['karaoke_sort'] = _('SORT');
$words['karaoke_search'] = _('SEARCH');
$words['karaoke_sampling'] = _('PICKING');
$words['karaoke_by_letter'] = _('BY LETTER');
$words['karaoke_by_performer'] = _('BY NAME');
$words['karaoke_by_title'] = _('BY TITLE');
$words['karaoke_title'] = _('KARAOKE');

// layer
$words['layer_page'] = _('PAGE');
$words['layer_from'] = _('FROM');
$words['layer_found'] = _('FOUND');
$words['layer_records'] = _('RECORDS');
$words['layer_loading'] = _('LOADING...');

// media browser
$words['mbrowser_title'] = _('Media Browser');
$words['mbrowser_connected'] = _('connected');
$words['mbrowser_disconnected'] = _('disconnected');
$words['mbrowser_not_found'] = _('not found');

$words['usb_drive'] = _('USB drive');

// player
$words['player_limit_notice'] = _('The number of connections is limited. <br> Try again later');
$words['player_file_missing'] = _('File missing');
$words['player_server_error'] = _('Server error');
$words['player_server_unavailable'] = _('Server unavailable');
$words['player_series'] = _('part');
$words['player_track'] = _('Track');
$words['player_off'] = _('Off');
$words['player_subtitle'] = _('Subtitles');
$words['player_claim'] = _('Complain');
$words['player_on_sound'] = _('on sound');
$words['player_on_video'] = _('on video');
$words['player_audio'] = _('Audio');
$words['player_ty'] = _('Thank you, your opinion will be taken into account');
$words['series_by_one_play'] = _('one series');
$words['series_continuously_play'] = _('continuously');

$words['aspect_fit'] = _('fit on');
$words['aspect_big'] = _('zoom');
$words['aspect_opt'] = _('optimal');
$words['aspect_exp'] = _('stretch');
$words['aspect_cmb'] = _('combined');

// radio
$words['radio_title'] = _('RADIO');

// tv
$words['tv_view'] = _('VIEW');
$words['tv_sort'] = _('SORT');
$words['tv_favorite'] = $words['favorite'] = _('FAVORITE');
$words['tv_move'] = _('MOVE');
$words['tv_by_number'] = _('by number');
$words['tv_by_title'] = _('by title');
$words['tv_only_favorite'] = _('only favorite');
$words['tv_list'] = _('list');
$words['tv_list_w_info'] = _('list + info');
$words['tv_title'] = _('TV');

// vclub info
$words['vclub_info'] = _('information about the movie');
$words['vclub_year'] = _('Year');
$words['vclub_genre'] = _('Genre');
$words['vclub_length'] = _('Length');
$words['vclub_minutes'] = _('min');
$words['vclub_director'] = _('Director');
$words['vclub_cast'] = _('Cast');
$words['vclub_rating'] = _('Rating');

// vclub
$words['vclub_view'] = _('VIEW');
$words['vclub_sort'] = _('SORT');
$words['vclub_search'] = _('SEARCH');
$words['vclub_fav'] = _('FAVORITE');
$words['vclub_other'] = _('OTHER');
$words['vclub_find'] = _('FIND');
$words['vclub_by_letter'] = _('BY LETTER');
$words['vclub_by_genre'] = _('BY GENRE');
$words['vclub_by_year'] = _('BY YEAR');
$words['vclub_by_rating'] = _('BY RATING');
$words['vclub_search_box'] = _('search');
$words['vclub_query_box'] = _('picking');
$words['vclub_by_title'] = _('by title');
$words['vclub_by_addtime'] = _('by addtime');
$words['vclub_top'] = _('rating');
$words['vclub_only_hd'] = _('HD only');
$words['vclub_only_favorite'] = _('favorite only');
$words['vclub_not_ended'] = _('not ended');
$words['vclub_list'] = _('list');
$words['vclub_list_w_info'] = _('list + info');
$words['vclub_title'] = _('VIDEOCLUB');

// common
$words['cut_off_msg'] = _('Your STB is blocked.<br/> Call the provider.');
$words['month_arr'] = array(_('JANUARY'),_('FEBRUARY'),_('MARCH'),_('APRIL'),_('MAY'),_('JUNE'),_('JULY'),_('AUGUST'),_('SEPTEMBER'),_('OCTOBER'),_('NOVEMBER'),_('DECEMBER'));
$words['week_arr'] = array(_('SUNDAY'),_('MONDAY'),_('TUESDAY'),_('WEDNESDAY'),_('THURSDAY'),_('FRIDAY'),_('SATURDAY'));
//$words['week_short_arr'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
/// Short year. "г" for RU and leave empty for EN;
$words['year'] = '';

// pvr
$words['records_title'] = _('RECORDS');

// ears
$words['ears_back'] = implode('<br>', preg_split('//u', _('BACK')));
$words['ears_about_movie'] = implode('<br>', preg_split('//u', _('ABOUT MOVIE')));
$words['ears_tv_guide'] = implode('<br>', preg_split('//u', _('TV GUIDE')));

// settings
$words['settings_title'] = _('SETTINGS');
$words['parent_settings_cancel'] = _('CANCEL');
$words['parent_settings_save'] = _('SAVE');
$words['parent_settings_old_pass'] = _('Current password');
$words['parent_settings_title'] = _('PARENTAL SETTINGS');
$words['parent_settings_title_short'] = _('PARENTAL');
$words['parent_settings_new_pass'] = _('New password');
$words['parent_settings_repeat_new_pass'] = _('Repeat new password');

$words['settings_saved'] = _('Settings saved');
$words['settings_saved_reboot'] = _('Settings saved.<br>The STB will be rebooted. Press OK.');
$words['settings_check_error'] = _('Error filling fields');
$words['settings_saving_error'] = _('Saving error');

$words['localization_settings_title'] = _('LOCALIZATION');
$words['localization_label'] = _('Language of the interface');
$words['country_label'] = _('Country');
$words['city_label'] = _('City');
$words['localization_page_button_info'] = _('Use PAGE-/+ buttons to move through several menu items');

$words['settings_software_update'] = _('SOFTWARE UPDATE');
$words['update_settings_cancel'] = _('CANCEL');
$words['update_settings_start_update'] = _('START UPDATE');
$words['update_from_http'] = _('From HTTP');
$words['update_from_usb'] = _('From USB');
$words['update_source'] = _('Source');
$words['update_method_select'] = _('Method select');

$words['empty'] = _('EMPTY');

$words['course_title'] = _('Exchange rate on');

$words['dayweather_title'] = _('WEATHER');
$words['dayweather_pressure'] = _('pres.:');
$words['dayweather_mmhg'] = _('mm Hg');
$words['dayweather_wind'] = _('wind:');
$words['dayweather_speed'] = _('m/s');

$words['infoportal_title'] = _('INFOPORTAL');

$words['cityinfo_title'] = _('CITY INFO');
$words['cityinfo_main'] = _('emergency');
$words['cityinfo_help'] = _('help');
$words['cityinfo_other'] = _('other');
$words['cityinfo_sort'] = _('VIEW');

$words['horoscope_title'] = _('HOROSCOPE');

$words['anecdote_title'] = _('JOKES');

$words['anecdote_goto'] = _('GOTO');
$words['anecdote_like'] = _('LIKE');
$words['anecdote_bookmark'] = _('BOOKMARK');
$words['anecdote_to_bookmark'] = _('TO BOOKMARK');

$words['anecdote_pagebar_title'] = _('JOKE');

$words['mastermind_title'] = _('MASTERMIND');
$words['mastermind_rules'] = _('RULES');
$words['mastermind_rating'] = _('RATING');
/// Short Bull
$words['mastermind_bull'] = _('B');
// Short Cow
$words['mastermind_cow'] = _('C');

$words['mastermind_rules_text'] = _('Your task is to guess the number of unduplicated four digits, the first of them - not zero. Every your guess will be compared with the number put forth a STB. If you guessed a digit, but it is not in place, then it is a COW (C). If you guessed, and a number, and its location, this BULL (B).');
$words['mastermind_move_cursor'] = _('Moving the cursor');
$words['mastermind_cell_numbers'] = _('Enter numbers into cells');
$words['mastermind_step_confirmation'] = _('Confirmation of the step');
$words['mastermind_page'] = 'Page';
$words['mastermind_history_moves'] = _('Moving through the pages of history moves');

$words['msg_service_off'] = _('Service is disabled');
$words['msg_channel_not_available'] = _('Channel is not available');

$words['epg_title']  = _('TV Guide');
$words['epg_record'] = _('RECORD');
$words['epg_remind'] = _('REMIND');
$words['epg_memo']   = _('Memo');
$words['epg_goto_ch'] = _('Goto channel');
$words['epg_close_msg'] = _('Close');
$words['epg_on_ch']  = _('on channel');
$words['epg_now_begins'] = _('now begins');
$words['epg_on_time'] = _('in');
$words['epg_started'] = _('started');

/// TRANSLATORS: Search box languages. Comma separated without spaces.
$words['search_box_languages'] = explode(',', _('search_box_languages'));

/// TRANSLATORS: {0} - day, {1} - date, {2} - month, {3} - year.
$words['date_format'] = _('date_format');

/// TRANSLATORS: {0} - hours, {1} - minutes, {2} am/pm hour, {3} am/pm mark.
$words['time_format'] = _('time_format');

$words['timezone_label'] = _('Timezone');
$words['ntp_server'] = _('NTP Server');

$words['remote_pvr_del'] = _('DELETE');
$words['remote_pvr_stop'] = _('STOP');
$words['remote_pvr_del_confirm'] = _('Do you really want to delete this record?');
$words['remote_pvr_stop_confirm'] = _('Do you really want to stop this record?');

$words['alert_confirm'] = _('Confirm');
$words['alert_cancel'] = _('Cancel');

$words['recorder_server_error'] = _('Server error. Try again later.');
$words['record_duration'] = _('RECORDING DURATION');

$words['rest_length_title'] = _('FREE, h');

$words['channel_recording_restricted'] = _('Recording this channel is forbidden');

$words['playback_settings_buffer_size'] = _('Buffer size');
$words['playback_settings_time'] = _('Time, sec');
$words['playback_settings_title'] = _('PLAYBACK');
$words['playback_settings_cancel'] = $words['settings_cancel'] = $words['cancel_btn'] = _('CANCEL');
$words['exit_btn'] = _('EXIT');
$words['yes_btn'] = _('YES');
$words['close_btn'] = _('CLOSE');
$words['playback_settings_save'] = $words['settings_save'] = _('SAVE');

$words['audio_out'] = _('Audio out');
$words['audio_out_analog'] = _('Analog only');
$words['audio_out_analog_spdif'] = _('Analog and S/PDIF 2-channel PCM');
$words['audio_out_spdif'] = _('S/PDIF raw or 2-channel PCM');

$words['game'] = _('GAME');

// Downloads
$words['downloads_title'] = _('DOWNLOADS');
$words['not_found_mounted_devices'] = _('Not found mounted devices');
$words['downloads_add_download'] = _('Add download');
$words['downloads_device'] = _('Device');
$words['downloads_file_name'] = _('File name');
$words['downloads_ok'] = _('Ok');
$words['downloads_cancel'] = _('Cancel');
$words['downloads_create'] = _('CREATE');
$words['downloads_move_up'] = _('MOVE UP');
$words['downloads_move_down'] = _('MOVE DOWN');
$words['downloads_delete'] = _('DELETE');
$words['downloads_record'] = _('RECORDING');
$words['downloads_download'] = _('DOWNLOAD');
$words['downloads_record_and_file'] = _('RECORDING AND FILE');

$words['playback_limit_title']   = _('Duration of continuous playback');
$words['playback_limit_off']     = _('Without limit');
$words['playback_hours']         = _('hours');
$words['playback_limit_reached'] = _('Reached limit the duration of continuous playback. To continue playback, press the OK or EXIT.');

$words['common_settings_title']   = _('GENERAL SETTINGS');
$words['screensaver_delay_title'] = _('Screensaver interval');
$words['screensaver_off']         = _('Disabled');
$words['screensaver_minutes']     = _('min');

$words['demo_video_title']   = _('DEMO VIDEO');
$words['account_info_title'] = _('ACCOUNT');
$words['coming_soon']        = _('Coming soon');

$words['account_info']      = _('INFORMATION');
$words['account_payment']   = _('PAYMENT');
$words['account_agreement'] = _('AGREEMENT');
$words['account_terms']     = _('TERMS OF USE');

$words['demo_video'] = _('Video instruction');


$words['tv_quality']        = _('QUALITY');
$words['tv_quality_low']    = _('low');
$words['tv_quality_medium'] = _('medium');
$words['tv_quality_high']   = _('high');

$words['tv_fav_add'] = _('add');
$words['tv_fav_del'] = _('del');

$words['internet']   = _('internet');

$words['network_status_title'] = _('NETWORK STATUS');
$words['network_status_refresh'] = _('REFRESH');

$words['test_speed'] = _('Speed test');
$words['speedtest_testing']   = _('testing...');
$words['speedtest_error']     = _('error');
$words['speedtest_waiting']   = _('waiting...');

$words['lan_up']     = _('UP');
$words['lan_down']   = _('DOWN');

$words['download_stopped']       = _('stopped');
$words['download_waiting_queue'] = _('waiting queue');
$words['download_running']       = _('running');
$words['download_completed']     = _('completed');
$words['download_temporary_error'] = _('temporary error');
$words['download_permanent_error'] = _('permanent error');

$words['auth_title'] = _('Authentication');
$words['auth_login'] = _('Login');
$words['auth_password'] = _('Password');
$words['auth_error']    = _('Error');

$words['play_or_download'] = _('Play this url or start download?');
$words['player_play']      = _('Play');

$words['player_download']    = _('Download');
$words['play_all']  = _('Play all');
$words['on']  = _('on');
$words['off'] = _('off');

$words['smb_auth'] = _('Network authentication');
$words['smb_username'] = _('Login');
$words['smb_password'] = _('Password');

$words['exit_title'] = _('Do you really want to exit?');

$words['identical_download_exist'] = _('There is an active downloads from this server');

$words['alert_form_title'] = _('Alert');
$words['confirm_form_title'] = _('Confirm');

$words['media_favorites'] = _('Favorites');

?>