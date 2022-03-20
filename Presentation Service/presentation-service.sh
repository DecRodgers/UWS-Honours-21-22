#! /bin/sh

#Flags for URL and Chromium browser
Flags="--kiosk --disable-restore-session-state --noerrdialogs --disable-infobars --autoplay-policy=no-user-gesture-required "
URL="http://localhost/wordpress/index.php/foyer/presentation/"

#Hide cursor by launching unclutter
/usr/bin/unclutter -idle 5 -grab -root

#Keep in loop to restart if closed manually/error occurs
while true; do
        /usr/bin/chromium-browser $Flags $URL &
done
