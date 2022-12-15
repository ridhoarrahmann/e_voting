<?php
function check_user_vote($is_vote)
{

    switch ($is_vote) {
        case null:
            return 'belum vote';
            break;

        default:
            return 'sudah vote';
            break;
    }
}
function sesi_status($status_id)
{
    switch ($status_id) {
        case 1:
            return 'Aktif';
            break;
        default:
            return 'Nonaktif';
            break;
    }
}
function zero_helper($nilai){
    switch($nilai){
        case null :
            return 0;
            break;
        default:
            return $nilai;
            break;
    }
}
