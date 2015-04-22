register_check_parameters(
    subgroup_networking,
    'mikrotik_wlan_station',
    _('Mikrotik WLAN station'),
    Tuple(
        title = _('WLAN params'),
        help = _('bla'),
        elements = [
            Tuple(
                elements = [
                    Integer(title = _('Tx warning'), unit=_('Mbit')),
                    Integer(title = _('Tx critical'), unit=_('Mbit')),
                ],
            ),
            Tuple(
                elements = [
                    Integer(title = _('Rx warning'), unit=_('Mbit')),
                    Integer(title = _('Rx critical'), unit=_('Mbit')),
                ],
            ),
            Tuple(
                elements = [
                    Integer(title = _('Signal warning'), unit=_('dB')),
                    Integer(title = _('Signal critical'), unit=_('dB')),
                ],
            ),
        ],
    ),
    TextAscii(title=_('WLAN')),
    'first',
)
