def perfometer_mikrotik_wlan_station(row, check_command, perf_data):
    signal = saveint(perf_data[2][1])

    if signal in range(-49, 0):
        color = "#00ffff"
    elif signal in range(-59, -49):
        color = "#7fff00"
    elif signal in range(-69, -59):
        color = "#adff2f"
    elif signal in range(-79, -69):
        color = "#ffff00"
    elif signal in range(-89, -79):
        color = "#ffd700"
    else:
        color = "#ff7f50"

    h = '<table><tr>'

    perc_used = -signal
    perc_free = 100 + signal

    h += perfometer_td(perc_used, color)
    h += perfometer_td(perc_free, "white")
    h += '</tr></table>'

    return "-%d dB" % perc_used, h

perfometers['check_mk-mikrotik_wlan_station'] = perfometer_mikrotik_wlan_station
