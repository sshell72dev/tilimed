<?
#определяет по user-agent являеться ли клиент ботом google page speed
function gpsiChecker() {
    return (preg_match('/nux.*oto\sG|x11.*fox\/54|x11.*ome\/39|x11.*ome\/62|oid\s6.*1.*xus\s5.*MRA58N.*ome|JWR66Y.*ome\/62|woobot|speed|ighth|tmetr|eadle/i', $_SERVER['HTTP_USER_AGENT'])) ? true : false;
}
?>
