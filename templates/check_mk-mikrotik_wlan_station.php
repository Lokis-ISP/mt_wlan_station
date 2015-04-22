<?php
$opt[1] =  "--vertical-label Mbps --title \"TX/RX for $hostname / $servicedesc\" ";

$def[1] =   rrd::def('tx', $RRDFILE[1], $DS[1], 'AVERAGE');
$def[1] .=  rrd::hrule($WARN[1], '#ffff00');
$def[1] .=  rrd::hrule($CRIT[1], '#ff0000');
$def[1] .=  rrd::hrule(-$WARN[2], '#ffff00');
$def[1] .=  rrd::hrule(-$CRIT[2], '#ff0000');
$def[1] .=  rrd::area('tx', '#76D5D6', 'TX\l');
$def[1] .=  rrd::def('rx', $RRDFILE[1], $DS[2], 'AVERAGE');
$def[1] .=  rrd::cdef('rx_neg', 'rx,-1,*');
$def[1] .=  rrd::area('rx_neg', '#7BED8C', 'RX\l');
// move the next lines up
$def[1] .=  rrd::comment('\u');
$def[1] .=  rrd::comment('\u');
$def[1] .=  rrd::gprint('tx', 'LAST',    '        Last %3.0lf Mbit');
$def[1] .=  rrd::gprint('tx', 'MAX',     '\tMax %3.0lf Mbit');
$def[1] .=  rrd::gprint('tx', 'MIN',     '\tMin %3.0lf Mbit');
$def[1] .=  rrd::gprint('tx', 'AVERAGE', '\tAverage %3.0lf Mbit\l');
$def[1] .=  rrd::gprint('rx', 'LAST',    '        Last %3.0lf Mbit');
$def[1] .=  rrd::gprint('rx', 'MAX',     '\tMax %3.0lf Mbit');
$def[1] .=  rrd::gprint('rx', 'MIN',     '\tMin %3.0lf Mbit');
$def[1] .=  rrd::gprint('rx', 'AVERAGE', '\tAverage %3.0lf Mbit\l');


$opt[2] =  "--vertical-label dB --title \"Signal strength for $hostname / $servicedesc\" ";

$def[2] =   rrd::def('signal', $RRDFILE[1], $DS[3], 'AVERAGE');
$def[2] .=  rrd::hrule($WARN[3], '#ffff00');
$def[2] .=  rrd::hrule($CRIT[3], '#ff0000');
$def[2] .=  rrd::area('signal', '#888888', 'Signal\l');
// move the next lines up
$def[2] .=  rrd::comment('\u');
$def[2] .=  rrd::gprint('signal', 'LAST',    '          Last %2.0lf dB');
$def[2] .=  rrd::gprint('signal', 'MAX',     '\tMax %2.0lf dB');
$def[2] .=  rrd::gprint('signal', 'MIN',     '\tMin %2.0lf dB');
$def[2] .=  rrd::gprint('signal', 'AVERAGE', '\tAverage %2.0lf dB\l');
?>
