# v2
Portfolio Update

## Creating animated gifs from movs
ffmpeg -i livewell-xl-480.mov -r 10 pngs/out%04d.png  // outputs pngs from mov
sips -s format gif pngs/*.png --out gifs  // converts pngs to gifs
gifsicle *.gif -O=3 -l -k 256 > livewell-xl.gif  // creates animated gif from gifs
