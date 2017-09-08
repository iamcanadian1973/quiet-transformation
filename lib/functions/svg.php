<?php

function get_svg( $type = '' ) {

	$svgs = array(

		'arrow-circle' => '<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65"><defs><polygon points="0 0.1 0 65 64.9 65 64.9 0.1 0 0.1"/></defs><g fill="none"><g transform="translate(-1253 -1744)translate(122 1744)translate(1131 0)"><mask fill="#ABABAB"><use xlink:href="#path-1"/></mask><path class="circle" fill="#ABABAB" d="M32.5 65C50.4 65 64.9 50.4 64.9 32.5 64.9 14.6 50.4 0.1 32.5 0.1 14.6 0.1 0 14.6 0 32.5 0 50.4 14.6 65 32.5 65ZM32.5 2.7C48.9 2.7 62.3 16.1 62.3 32.5 62.3 49 48.9 62.4 32.5 62.4 16 62.4 2.6 49 2.6 32.5 2.6 16.1 16 2.7 32.5 2.7Z" mask="url(#mask-2)" /><path class="arrow" fill="#ABABAB" d="M36.4 42.6C36.7 42.9 37 43 37.4 43 37.7 43 38.1 42.9 38.3 42.6L48.6 32.9C48.9 32.7 49 32.3 49 32 49 31.7 48.9 31.3 48.6 31.1L38.3 21.4C37.8 20.9 36.9 20.9 36.4 21.4 35.9 21.9 35.9 22.7 36.4 23.2L45.7 32 36.4 40.8C35.9 41.3 35.9 42.1 36.4 42.6Z" /><path class="line" d="M45.6 33L20.4 33" style="stroke-width:3;stroke:#ABABAB"/></g></g></svg>',

		'logo-mark' => '<svg xmlns="http://www.w3.org/2000/svg" width="59" height="54" viewBox="0 0 59 54"><style>.a{fill:#ABABAB;}</style><title>  Page 1</title><desc>  Created with Sketch.</desc><g fill="none"><g transform="translate(-156 -43)translate(156 43)"><polygon points="20.5 48.1 27.3 32.1 13.7 32.1" class="a"/><polygon points="29.2 27.6 34.1 16 7 16 11.8 27.6" class="a"/><polygon points="0 0 5 11.6 35.9 11.6 40.9 0" class="a"/><polygon points="45.7 0 22.9 53.7 35.5 53.7 58.3 0" fill="#CA3F39"/></g></g></svg>',

    'email' => '<svg viewBox="0 0 512 512"><path d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z"/></svg>',

		'facebook' => '<svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path></svg>',

		'googleplus' => '<svg viewBox="0 0 512 512"><path d="M179.7 237.6L179.7 284.2 256.7 284.2C253.6 304.2 233.4 342.9 179.7 342.9 133.4 342.9 95.6 304.4 95.6 257 95.6 209.6 133.4 171.1 179.7 171.1 206.1 171.1 223.7 182.4 233.8 192.1L270.6 156.6C247 134.4 216.4 121 179.7 121 104.7 121 44 181.8 44 257 44 332.2 104.7 393 179.7 393 258 393 310 337.8 310 260.1 310 251.2 309 244.4 307.9 237.6L179.7 237.6 179.7 237.6ZM468 236.7L429.3 236.7 429.3 198 390.7 198 390.7 236.7 352 236.7 352 275.3 390.7 275.3 390.7 314 429.3 314 429.3 275.3 468 275.3"></path></svg>',

		'linkedin' => '<svg viewBox="0 0 512 512"><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path></svg>',

		'twitter' => '<svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path></svg>',

		'instagram' => '<svg viewBox="0 0 512 512"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path><circle cx="351.5" cy="160.5" r="21.5"></circle></g></svg>',

		'vimeo' => '<svg viewBox="0 0 512 512"><path d="M420.1 197.9c-1.5 33.6-25 79.5-70.3 137.8 -46.9 60.9-86.5 91.4-118.9 91.4 -20.1 0-37.1-18.5-51-55.6 -9.3-34-18.5-68-27.8-102 -10.3-37.1-21.4-55.7-33.2-55.7 -2.6 0-11.6 5.4-27 16.2L75.7 209.1c17-14.9 33.8-29.9 50.3-44.9 22.7-19.6 39.7-29.9 51.1-31 26.8-2.6 43.3 15.8 49.5 55 6.7 42.4 11.3 68.7 13.9 79 7.7 35.1 16.2 52.7 25.5 52.7 7.2 0 18-11.4 32.5-34.2 14.4-22.8 22.2-40.1 23.2-52.1 2.1-19.7-5.7-29.5-23.2-29.5 -8.3 0-16.8 1.9-25.5 5.7 16.9-55.5 49.3-82.4 97.1-80.9C405.5 130 422.2 153 420.1 197.9z"></path></svg>',

        'vk' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="st0" d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"/></svg>',

        'plus' => '<svg width="39px" height="39px" viewBox="0 0 39 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
     <g id="Mockups" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Services" transform="translate(-461.000000, -2838.000000)" fill="#ECECEC">
            <path d="M480.395307,2838.02437 C469.692158,2838.02437 461.024366,2846.69216 461.024366,2857.39531 C461.024366,2868.10164 469.692158,2876.76943 480.395307,2876.76943 C491.101642,2876.76943 499.769433,2868.10164 499.769433,2857.39531 C499.769433,2846.69216 491.101642,2838.02437 480.395307,2838.02437 Z M480.395307,2874.73089 C470.811795,2874.73089 463.062909,2866.98137 463.062909,2857.39531 C463.062909,2847.8118 470.811795,2840.06291 480.395307,2840.06291 C489.981367,2840.06291 497.73089,2847.8118 497.73089,2857.39531 C497.73089,2866.98137 489.981367,2874.73089 480.395307,2874.73089 Z M481.824645,2857.39531 L488.246789,2850.97316 C488.654625,2850.56533 488.654625,2849.95293 488.246789,2849.54446 C487.838315,2849.13854 487.228473,2849.13854 486.82,2849.54446 L480.395307,2855.96915 L473.973162,2849.54446 C473.565326,2849.13854 472.952935,2849.13854 472.544462,2849.54446 C472.138537,2849.95293 472.138537,2850.56533 472.544462,2850.97316 L478.969155,2857.39531 L472.544462,2863.82 C472.138537,2864.22847 472.138537,2864.83832 472.544462,2865.24679 C472.952935,2865.65462 473.565326,2865.65462 473.973162,2865.24679 L480.395307,2858.82464 L486.82,2865.24679 C487.228473,2865.65462 487.838315,2865.65462 488.246789,2865.24679 C488.654625,2864.83832 488.654625,2864.22847 488.246789,2863.82 L481.824645,2857.39531 Z" id="cancel-button" transform="translate(480.396900, 2857.396900) rotate(-315.000000) translate(-480.396900, -2857.396900) "></path>
        </g>
    </g>
</svg>'

	);

	if( isset( $svgs[$type] ) ) {
		return $svgs[$type];
	}

}