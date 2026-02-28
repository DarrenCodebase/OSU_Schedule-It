<?php

$request_uri = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
$request_queries = explode('?', $request_uri);
$request = $request_queries[0];
$meeting_show = preg_match('/meetings\/[0-9]+$/i', $request);
$meeting_edit = preg_match('/meetings\/[0-9]+\/edit$/i', $request);
$meeting_edit_dates = preg_match('/meetings\/[0-9]+\/dates$/i', $request);
$uri = explode('/', $request);

switch ($request) {
    case '/':
    case '':
        require_once ABSPATH . './index.php';
        break;
    case '/header':
        require_once ABSPATH . '/OSU_Schedule-It/header.php';
        break;
    case '/calendar':
        require_once ABSPATH . 'views/calendar/calendarPage.php';
        break;
    case '/login':
        require_once ABSPATH . 'views/user/login.php';
        break;
    case '/logout':
        require_once ABSPATH . 'views/user/logout.php';
        break;
    case '/create':
        require_once ABSPATH . 'views/create/create.php';
        break;
    case '/invite':
        require_once ABSPATH . 'views/create/invite.php';
        break;
    case '/meeting':
        require_once ABSPATH . 'views/meeting/meeting.php';
        break;
    case '/profile':
        require_once ABSPATH . 'views/profile.php';
        break;
    case '/footer':
        require_once ABSPATH . '/OSU_Schedule-It/footer.php';
        break;
    default:
        require_once ABSPATH . 'views/error/error.php';
        break;
}
