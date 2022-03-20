#! /bin/sh
# Resources used: 
# https://forums.raspberrypi.com/viewtopic.php?p=1892055
# https://forums.raspberrypi.com/viewtopic.php?t=264093
# https://raspberrypi.stackexchange.com/questions/99892/2-chromium-windows
# https://stackoverflow.com/questions/29294045/how-to-open-two-instances-of-chrome-kiosk-mode-in-different-displays-windows

# General flags for both Chromium instances
Flags="--kiosk --disable-restore-session-state --noerrdialogs --disable-infobars --autoplay-policy=no-user-gesture-required"

# First URL for first monitor set by Window-position (0-1919)
URL="http://localhost/wordpress/index.php/foyer/2nddemo/"
Prof1="--new-window --window-position=0,0 --user-data-dir=Default"

# Second URL, usr-data-dir must be different for this instance 
# Window-position must match monitor resolution of 2nd display (1920-3849) 
URL2="http://localhost/wordpress/index.php/foyer/presentation/"
Prof2="--new-window  --window-position=1920,0 --user-data-dir=Profile1"

#single ampersand in Linux to launch commands simultaneously
/usr/bin/chromium-browser $Flags $URL $Prof1 & /usr/bin/chromium-browser $Flags $URL2 $Prof2