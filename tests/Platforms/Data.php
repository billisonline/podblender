<?php

namespace Tests\Platforms;

abstract class Data
{
    // From https://gist.github.com/rodrigoborgesdeoliveira/987683cfbfcc8d800192da1e73adc486
    const array YOUTUBE_URLS_TO_IDS = [
        'http://www.youtube.com/watch?v=-wtIMTCHWuI' => '-wtIMTCHWuI',
        'http://youtube.com/watch?v=-wtIMTCHWuI' => '-wtIMTCHWuI',
        'http://m.youtube.com/watch?v=-wtIMTCHWuI' => '-wtIMTCHWuI',
        'https://www.youtube.com/watch?v=lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'https://youtube.com/watch?v=lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'https://m.youtube.com/watch?v=lalOy8Mbfdc' => 'lalOy8Mbfdc',

        'http://www.youtube.com/watch?v=-wtIMTCHWuI&feature=em-uploademail' => '-wtIMTCHWuI',
        'http://youtube.com/watch?v=-wtIMTCHWuI&feature=em-uploademail' => '-wtIMTCHWuI',
        'http://m.youtube.com/watch?v=-wtIMTCHWuI&feature=em-uploademail' => '-wtIMTCHWuI',
        'https://www.youtube.com/watch?v=lalOy8Mbfdc&feature=em-uploademail' => 'lalOy8Mbfdc',
        'https://youtube.com/watch?v=lalOy8Mbfdc&feature=em-uploademail' => 'lalOy8Mbfdc',
        'https://m.youtube.com/watch?v=lalOy8Mbfdc&feature=em-uploademail' => 'lalOy8Mbfdc',

        'http://www.youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',
        'http://youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',
        'http://m.youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',
        'https://www.youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',
        'https://youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',
        'https://m.youtube.com/watch?v=0zM3nApSvMg&feature=feedrec_grec_index' => '0zM3nApSvMg',

        'http://www.youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',
        'http://youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',
        'http://m.youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',
        'https://www.youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',
        'https://youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',
        'https://m.youtube.com/watch?v=0zM3nApSvMg#t=0m10s' => '0zM3nApSvMg',

        'http://www.youtube.com/watch?v=cKZDdG9FTKY&feature=channel' => 'cKZDdG9FTKY',
        'http://youtube.com/watch?v=cKZDdG9FTKY&feature=channel' => 'cKZDdG9FTKY',
        'http://m.youtube.com/watch?v=cKZDdG9FTKY&feature=channel' => 'cKZDdG9FTKY',
        'https://www.youtube.com/watch?v=oTJRivZTMLs&feature=channel' => 'oTJRivZTMLs',
        'https://youtube.com/watch?v=oTJRivZTMLs&feature=channel' => 'oTJRivZTMLs',
        'https://m.youtube.com/watch?v=oTJRivZTMLs&feature=channel' => 'oTJRivZTMLs',

        'http://www.youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',
        'http://youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',
        'http://m.youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',
        'https://www.youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',
        'https://youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',
        'https://m.youtube.com/watch?v=lalOy8Mbfdc&playnext_from=TL&videos=osPknwzXEas&feature=sub' => 'lalOy8Mbfdc',

        'http://www.youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',
        'http://youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',
        'http://m.youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',
        'https://www.youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',
        'https://youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',
        'https://m.youtube.com/watch?v=lalOy8Mbfdc&feature=youtu.be' => 'lalOy8Mbfdc',

        'http://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'http://youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player' => 'dQw4w9WgXcQ',

        'http://www.youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',
        'http://youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',
        'http://m.youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',
        'https://www.youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',
        'https://youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',
        'https://m.youtube.com/watch?v=ishbTyLs6ps&list=PLGup6kBfcU7Le5laEaCLgTKtlDcxMqGxZ&index=106&shuffle=2655' => 'ishbTyLs6ps',

        'http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',

        'http://www.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ' => 'dQw4w9WgXcQ',

        'http://www.youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'http://youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'http://m.youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'https://www.youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'https://youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'https://m.youtube.com/watch/-wtIMTCHWuI' => '-wtIMTCHWuI',

        'http://www.youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',
        'http://youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',
        'http://m.youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',
        'https://www.youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',
        'https://youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',
        'https://m.youtube.com/watch/-wtIMTCHWuI?app=desktop' => '-wtIMTCHWuI',

        'http://www.youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/v/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',

        'http://www.youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',
        'http://youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',
        'http://m.youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',
        'https://www.youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',
        'https://youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',
        'https://m.youtube.com/v/-wtIMTCHWuI?version=3&autohide=1' => '-wtIMTCHWuI',

        'http://www.youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',
        'http://youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',
        'http://m.youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',
        'https://www.youtube.com/v/0zM3nApSvMg?fs=1&amp;hl=en_US&amp;rel=0' => '0zM3nApSvMg',
        'https://www.youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',
        'https://youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',
        'https://m.youtube.com/v/0zM3nApSvMg?fs=1&hl=en_US&rel=0' => '0zM3nApSvMg',

        'http://www.youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'http://youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',

        'http://youtu.be/-wtIMTCHWuI' => '-wtIMTCHWuI',
        'https://youtu.be/-wtIMTCHWuI' => '-wtIMTCHWuI',

        'http://youtu.be/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',
        'https://youtu.be/dQw4w9WgXcQ?feature=youtube_gdata_player' => 'dQw4w9WgXcQ',

        'http://youtu.be/oTJRivZTMLs?list=PLToa5JuFMsXTNkrLJbRlB--76IAOjRM9b' => 'oTJRivZTMLs',
        'https://youtu.be/oTJRivZTMLs?list=PLToa5JuFMsXTNkrLJbRlB--76IAOjRM9b' => 'oTJRivZTMLs',

        'http://youtu.be/oTJRivZTMLs&feature=channel' => 'oTJRivZTMLs',
        'https://youtu.be/oTJRivZTMLs&feature=channel' => 'oTJRivZTMLs',

        'http://youtu.be/lalOy8Mbfdc?t=1' => 'lalOy8Mbfdc',
        'http://youtu.be/lalOy8Mbfdc?t=1s' => 'lalOy8Mbfdc',
        'https://youtu.be/lalOy8Mbfdc?t=1' => 'lalOy8Mbfdc',
        'https://youtu.be/lalOy8Mbfdc?t=1s' => 'lalOy8Mbfdc',

        'http://youtu.be/M9bq_alk-sw?si=B_RZg_I-lLaa7UU-' => 'M9bq_alk-sw',
        'https://youtu.be/M9bq_alk-sw?si=B_RZg_I-lLaa7UU-' => 'M9bq_alk-sw',

        'http://www.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',
        'http://youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',
        'http://m.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',
        'https://www.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',
        'https://youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',
        'https://m.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D-wtIMTCHWuI&format=json' => '-wtIMTCHWuI',

        'http://www.youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',
        'http://youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',
        'http://m.youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',
        'https://www.youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',
        'https://youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',
        'https://m.youtube.com/attribution_link?a=JdfC0C9V6ZI&u=%2Fwatch%3Fv%3DEhxJLojIE_o%26feature%3Dshare' => 'EhxJLojIE_o',

        'http://www.youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',
        'http://youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',
        'http://m.youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',
        'https://www.youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',
        'https://youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',
        'https://m.youtube.com/attribution_link?a=8g8kPrPIi-ecwIsS&u=/watch%3Fv%3DyZv2daTWRZU%26feature%3Dem-uploademail' => 'yZv2daTWRZU',

        'http://www.youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'http://youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'http://m.youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'https://www.youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'https://youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',
        'https://m.youtube.com/embed/lalOy8Mbfdc' => 'lalOy8Mbfdc',

        'http://www.youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',
        'http://youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',
        'http://m.youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',
        'https://www.youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',
        'https://youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',
        'https://m.youtube.com/embed/nas1rJpm7wY?rel=0' => 'nas1rJpm7wY',

        'http://www.youtube-nocookie.com/embed/lalOy8Mbfdc?rel=0' => 'lalOy8Mbfdc',
        'https://www.youtube-nocookie.com/embed/lalOy8Mbfdc?rel=0' => 'lalOy8Mbfdc',

        'http://www.youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'http://m.youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://www.youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',
        'https://m.youtube.com/e/dQw4w9WgXcQ' => 'dQw4w9WgXcQ',

        'http://www.youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',
        'http://youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',
        'http://m.youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',
        'https://www.youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',
        'https://youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',
        'https://m.youtube.com/shorts/j9rZxAF3C0I' => 'j9rZxAF3C0I',

        'http://www.youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',
        'http://youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',
        'http://m.youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',
        'https://www.youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',
        'https://youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',
        'https://m.youtube.com/shorts/j9rZxAF3C0I?app=desktop' => 'j9rZxAF3C0I',

        'http://www.youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',
        'http://youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',
        'http://m.youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',
        'https://www.youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',
        'https://youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',
        'https://m.youtube.com/live/8hBmepWUJoc' => '8hBmepWUJoc',

        'http://www.youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
        'http://youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
        'http://m.youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
        'https://www.youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
        'https://youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
        'https://m.youtube.com/live/8hBmepWUJoc?app=desktop' => '8hBmepWUJoc',
    ];
}
