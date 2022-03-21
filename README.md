# UWS-Honours-21-22
Repository containing code for UWS Honours project to create a Digital Signage Solution for SMEs using Low cost computing and Open Source Software.
The code for the components developed uniquely for this are hosted here, which includes the Power Control Webpage and Unit Service files for the Presentation.

This project uses _WordPress_ as the CMS for uploading and managing content to a Raspberry Pi, and the plugin [_Foyer_](https://github.com/mennolui/wp-foyer) for creating a slideshow and displaying it to a generated URL slug. This [guide](https://raspberrytips.com/wordpress-on-raspberry-pi/) on RaspberryTips by Patrick Fromaget was incredibly helpful at the start of this project.

## Power Control Page
I was inspired to use create this since Digital Signage solutions can be in physically difficult to reach places, so the purpose was to provide a remote, secure method to shut down the device without physical access.
The method is very similar to the inspiration from element14 (found [here](https://community.element14.com/products/raspberry-pi/raspberrypi_projects/b/blog/posts/pi-webpage-reboot)), but runs the command directly in PHP rather than a separate python script.

This will require editing the sudoers file to allow www-data for Apache (or whatever web service user) to have permission to run the commands.


## Presentation Service
The presentation is a chromium instance that points to the URL created by _Foyer_, Using this method allows tying in a second application called _Unclutter_ to hide the mouse cursor when the presentation plays, and can return it when a command to stop is issued.
It also allows an easy restart 'Presentation Button' to be added to the Power Control to update any changes quickly (less than the 5 minute timer by Foyer)
