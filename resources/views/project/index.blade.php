<html lang="en">

<head>
    <script type="module">
        import RefreshRuntime from "/@react-refresh"
        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => { }
        window.$RefreshSig$ = () => (type) => type
        window.__vite_plugin_react_preamble_installed__ = true
    </script>

    <script type="module" src="/@vite/client"></script>

    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite + React + TS</title>
    <style type="text/css" data-vite-dev-id="/home/project/src/index.css">
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        /*
! tailwindcss v3.4.13 | MIT License | https://tailwindcss.com
*/
        /*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        /*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

        html,
        :host {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            -o-tab-size: 4;
            tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
            font-variation-settings: normal;
            /* 6 */
            -webkit-tap-highlight-color: transparent;
            /* 7 */
        }

        /*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

        body {
            margin: 0;
            /* 1 */
            line-height: inherit;
            /* 2 */
        }

        /*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
        }

        /*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /*
Remove the default font size and weight for headings.
*/

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /*
Reset links to optimize for opt-in styling instead of opt-out.
*/

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /*
Add the correct font weight in Edge and Safari.
*/

        b,
        strong {
            font-weight: bolder;
        }

        /*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-feature-settings: normal;
            /* 2 */
            font-variation-settings: normal;
            /* 3 */
            font-size: 1em;
            /* 4 */
        }

        /*
Add the correct font size in all browsers.
*/

        small {
            font-size: 80%;
        }

        /*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        /*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-feature-settings: inherit;
            /* 1 */
            font-variation-settings: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            letter-spacing: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
        }

        /*
Remove the inheritance of text transform in Edge and Firefox.
*/

        button,
        select {
            text-transform: none;
        }

        /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

        button,
        input:where([type='button']),
        input:where([type='reset']),
        input:where([type='submit']) {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
        }

        /*
Use the modern Firefox focus style for all focusable elements.
*/

        :-moz-focusring {
            outline: auto;
        }

        /*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /*
Add the correct vertical alignment in Chrome and Firefox.
*/

        progress {
            vertical-align: baseline;
        }

        /*
Correct the cursor style of increment and decrement buttons in Safari.
*/

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

        [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /*
Remove the inner padding in Chrome and Safari on macOS.
*/

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /*
Add the correct display in Chrome and Safari.
*/

        summary {
            display: list-item;
        }

        /*
Removes the default spacing and border for appropriate elements.
*/

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
Reset default styling for dialogs.
*/
        dialog {
            padding: 0;
        }

        /*
Prevent resizing textareas horizontally by default.
*/

        textarea {
            resize: vertical;
        }

        /*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        /*
Set the default cursor for buttons.
*/

        button,
        [role="button"] {
            cursor: pointer;
        }

        /*
Make sure disabled buttons don't get the pointer cursor.
*/
        :disabled {
            cursor: default;
        }

        /*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */
        [hidden] {
            display: none;
        }

        .container {
            width: 100%;
        }

        @media (min-width: 640px) {

            .container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) {

            .container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) {

            .container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {

            .container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1536px) {

            .container {
                max-width: 1536px;
            }
        }

        .pointer-events-none {
            pointer-events: none;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .inset-y-0 {
            top: 0px;
            bottom: 0px;
        }

        .left-0 {
            left: 0px;
        }

        .right-0 {
            right: 0px;
        }

        .right-1 {
            right: 0.25rem;
        }

        .top-1 {
            top: 0.25rem;
        }

        .z-10 {
            z-index: 10;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-12 {
            margin-bottom: 3rem;
        }

        .mb-3 {
            margin-bottom: 0.75rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .ml-1 {
            margin-left: 0.25rem;
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .ml-3 {
            margin-left: 0.75rem;
        }

        .mr-1 {
            margin-right: 0.25rem;
        }

        .mr-4 {
            margin-right: 1rem;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .mt-12 {
            margin-top: 3rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        .block {
            display: block;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .h-10 {
            height: 2.5rem;
        }

        .h-12 {
            height: 3rem;
        }

        .h-16 {
            height: 4rem;
        }

        .h-2 {
            height: 0.5rem;
        }

        .h-20 {
            height: 5rem;
        }

        .h-3 {
            height: 0.75rem;
        }

        .h-4 {
            height: 1rem;
        }

        .h-5 {
            height: 1.25rem;
        }

        .h-6 {
            height: 1.5rem;
        }

        .h-8 {
            height: 2rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-10 {
            width: 2.5rem;
        }

        .w-12 {
            width: 3rem;
        }

        .w-16 {
            width: 4rem;
        }

        .w-2 {
            width: 0.5rem;
        }

        .w-20 {
            width: 5rem;
        }

        .w-3 {
            width: 0.75rem;
        }

        .w-4 {
            width: 1rem;
        }

        .w-48 {
            width: 12rem;
        }

        .w-5 {
            width: 1.25rem;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-full {
            width: 100%;
        }

        .max-w-3xl {
            max-width: 48rem;
        }

        .max-w-4xl {
            max-width: 56rem;
        }

        .flex-grow {
            flex-grow: 1;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .flex-col {
            flex-direction: column;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-center {
            align-items: center;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .gap-4 {
            gap: 1rem;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .gap-8 {
            gap: 2rem;
        }

        .space-x-2> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-4> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-8> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-1> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
        }

        .space-y-2> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .border {
            border-width: 1px;
        }

        .border-t {
            border-top-width: 1px;
        }

        .border-gray-100 {
            --tw-border-opacity: 1;
            border-color: rgb(243 244 246 / var(--tw-border-opacity));
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity));
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity));
        }

        .border-indigo-500 {
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity));
        }

        .bg-blue-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity));
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }

        .bg-green-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity));
        }

        .bg-indigo-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity));
        }

        .bg-indigo-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity));
        }

        .bg-indigo-600 {
            --tw-bg-opacity: 1;
            background-color: rgb(79 70 229 / var(--tw-bg-opacity));
        }

        .bg-indigo-700 {
            --tw-bg-opacity: 1;
            background-color: rgb(67 56 202 / var(--tw-bg-opacity));
        }

        .bg-purple-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 232 255 / var(--tw-bg-opacity));
        }

        .bg-red-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover;
        }

        .p-2 {
            padding: 0.5rem;
        }

        .p-4 {
            padding: 1rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .p-8 {
            padding: 2rem;
        }

        .px-2\.5 {
            padding-left: 0.625rem;
            padding-right: 0.625rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .py-0\.5 {
            padding-top: 0.125rem;
            padding-bottom: 0.125rem;
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .pb-3 {
            padding-bottom: 0.75rem;
        }

        .pl-10 {
            padding-left: 2.5rem;
        }

        .pl-3 {
            padding-left: 0.75rem;
        }

        .pr-3 {
            padding-right: 0.75rem;
        }

        .pt-2 {
            padding-top: 0.5rem;
        }

        .pt-4 {
            padding-top: 1rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .text-center {
            text-align: center;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }

        .text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-blue-600 {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity));
        }

        .text-blue-800 {
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity));
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity));
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
        }

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity));
        }

        .text-green-800 {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity));
        }

        .text-indigo-100 {
            --tw-text-opacity: 1;
            color: rgb(224 231 255 / var(--tw-text-opacity));
        }

        .text-indigo-400 {
            --tw-text-opacity: 1;
            color: rgb(129 140 248 / var(--tw-text-opacity));
        }

        .text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
        }

        .text-indigo-700 {
            --tw-text-opacity: 1;
            color: rgb(67 56 202 / var(--tw-text-opacity));
        }

        .text-indigo-800 {
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity));
        }

        .text-purple-600 {
            --tw-text-opacity: 1;
            color: rgb(147 51 234 / var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .text-yellow-400 {
            --tw-text-opacity: 1;
            color: rgb(250 204 21 / var(--tw-text-opacity));
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-200:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .hover\:bg-indigo-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity));
        }

        .hover\:bg-indigo-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(67 56 202 / var(--tw-bg-opacity));
        }

        .hover\:bg-indigo-800:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(55 48 163 / var(--tw-bg-opacity));
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .hover\:text-indigo-800:hover {
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity));
        }

        .hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .hover\:shadow-lg:hover {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:border-indigo-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity));
        }

        .focus\:ring-indigo-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
        }

        .group:hover .group-hover\:block {
            display: block;
        }

        @media (min-width: 640px) {

            .sm\:flex-row {
                flex-direction: row;
            }
        }

        @media (min-width: 768px) {

            .md\:flex {
                display: flex;
            }

            .md\:hidden {
                display: none;
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .md\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

            .md\:flex-row {
                flex-direction: row;
            }
        }

        @media (min-width: 1024px) {

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body>
    <div id="root">
        <div class="min-h-screen bg-gray-50 flex flex-col">
            <header class="bg-white shadow-sm">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-shield h-8 w-8 text-indigo-600">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg><span class="text-xl font-bold text-gray-800">HireInfoTech</span></div>
                        <nav class="hidden md:flex items-center space-x-8"><a href="#"
                                class="text-sm font-medium text-indigo-600">Browse Projects</a><a href="#"
                                class="text-sm font-medium text-gray-600 hover:text-gray-900">Find Freelancers</a><a
                                href="#" class="text-sm font-medium text-gray-600 hover:text-gray-900">How It
                                Works</a><a href="#"
                                class="text-sm font-medium text-gray-600 hover:text-gray-900">Enterprise</a></nav>
                        <div class="hidden md:flex items-center space-x-4"><button
                                class="p-2 text-gray-500 hover:text-gray-700 relative"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-bell h-5 w-5">
                                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                                </svg><span
                                    class="absolute top-1 right-1 h-2 w-2 bg-red-500 rounded-full"></span></button><button
                                class="p-2 text-gray-500 hover:text-gray-700 relative"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-message-square h-5 w-5">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg><span
                                    class="absolute top-1 right-1 h-2 w-2 bg-red-500 rounded-full"></span></button>
                            <div class="relative group"><button
                                    class="flex items-center space-x-2 p-2 rounded-full hover:bg-gray-100">
                                    <div
                                        class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-medium">
                                        JD</div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-gray-500">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden group-hover:block">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a><a
                                        href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a><a
                                        href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                    <div class="border-t border-gray-100"></div><a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                                </div>
                            </div>
                        </div><button
                            class="md:hidden p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-menu h-6 w-6">
                                <line x1="4" x2="20" y1="12" y2="12"></line>
                                <line x1="4" x2="20" y1="6" y2="6"></line>
                                <line x1="4" x2="20" y1="18" y2="18"></line>
                            </svg></button>
                    </div>
                </div>
            </header>
            <main class="flex-grow">
                <section class="bg-indigo-700 text-white py-16">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl mx-auto text-center">
                            <h1 class="text-4xl font-bold mb-6">Hire Top Freelancers with Secure Payment Protection</h1>
                            <p class="text-xl mb-8 text-indigo-100">Find expert freelancers for your projects with our
                                secure escrow payment system. Quality work guaranteed.</p>
                            <div class="flex flex-col sm:flex-row justify-center gap-4">
                                <a href="{{ route('post_project') }}" class="bg-white text-indigo-700 font-medium py-3 px-6 rounded-lg shadow-md hover:bg-indigo-50 transition">Post a Project
                                </a>
                                <button
                                    class="bg-indigo-600 text-white font-medium py-3 px-6 rounded-lg shadow-md border border-indigo-500 hover:bg-indigo-800 transition">Find
                                    Freelancers
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-8 bg-white shadow-md">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-grow relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-search h-5 w-5 text-gray-400">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg></div><input type="text"
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Search for projects or skills...">
                            </div><button
                                class="flex items-center justify-center space-x-2 bg-gray-100 text-gray-700 py-3 px-4 rounded-lg hover:bg-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-filter h-5 w-5">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg><span>Filters</span></button><button
                                class="bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700">Search</button>
                        </div>
                    </div>
                </section>
                <section class="py-12">
                    <div class="container mx-auto px-4">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900">Featured Projects</h2><a href="#"
                                class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">View all
                                projects<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($data as $value)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $value->title  }}</h3><span
                                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Featured</span>
                                    </div>
                                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $value->description }}</p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach(explode(',',$value->tag)  as $tagValue)
                                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $tagValue }}</span> 
                                        @endforeach
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-dollar-sign h-4 w-4 text-gray-500 mr-1">
                                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg><span class="text-gray-700 font-medium">{{ $value->amount }}</span></div>
                                        <div class="flex items-center text-gray-500 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 mr-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg><span>{{ $value->created_at }}</span></div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <div
                                                class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-medium">
                                                TC</div>
                                            <div class="ml-2">
                                                <div class="text-sm font-medium text-gray-900">TechCorp Inc.</div>
                                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star h-3 w-3 text-yellow-400">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg><span class="text-xs text-gray-500 ml-1">4.9 (43
                                                        reviews)</span></div>
                                            </div>
                                        </div><button
                                            class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Apply</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="py-12 bg-gray-50">
                    <div class="container mx-auto px-4">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900">Top Freelancers</h2><a href="#"
                                class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">View all
                                freelancers<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div
                                class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                                <div class="p-6">
                                    <div class="flex flex-col items-center text-center mb-4"><img
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=256&amp;h=256&amp;q=80"
                                            alt="Freelancer" class="w-20 h-20 rounded-full object-cover mb-3">
                                        <h3 class="text-lg font-semibold text-gray-900">Sarah Johnson</h3>
                                        <p class="text-indigo-600 font-medium">Laravel Expert</p>
                                        <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><span class="text-sm text-gray-500 ml-1">5.0</span></div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 justify-center mb-4"><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Laravel</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">PHP</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Vue.js</span>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-gray-700 font-medium">$45/hr</p>
                                        <p class="text-gray-500 text-sm">98% Job Success</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-center"><button
                                        class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">View
                                        Profile</button></div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                                <div class="p-6">
                                    <div class="flex flex-col items-center text-center mb-4"><img
                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=256&amp;h=256&amp;q=80"
                                            alt="Freelancer" class="w-20 h-20 rounded-full object-cover mb-3">
                                        <h3 class="text-lg font-semibold text-gray-900">Michael Chen</h3>
                                        <p class="text-indigo-600 font-medium">Full Stack Developer</p>
                                        <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-gray-300">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><span class="text-sm text-gray-500 ml-1">4.8</span></div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 justify-center mb-4"><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Laravel</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">React</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">MySQL</span>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-gray-700 font-medium">$55/hr</p>
                                        <p class="text-gray-500 text-sm">95% Job Success</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-center"><button
                                        class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">View
                                        Profile</button></div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                                <div class="p-6">
                                    <div class="flex flex-col items-center text-center mb-4"><img
                                            src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=256&amp;h=256&amp;q=80"
                                            alt="Freelancer" class="w-20 h-20 rounded-full object-cover mb-3">
                                        <h3 class="text-lg font-semibold text-gray-900">Emily Rodriguez</h3>
                                        <p class="text-indigo-600 font-medium">Backend Developer</p>
                                        <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><span class="text-sm text-gray-500 ml-1">4.9</span></div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 justify-center mb-4"><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Laravel</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">API</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">PostgreSQL</span>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-gray-700 font-medium">$50/hr</p>
                                        <p class="text-gray-500 text-sm">97% Job Success</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-center"><button
                                        class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">View
                                        Profile</button></div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                                <div class="p-6">
                                    <div class="flex flex-col items-center text-center mb-4"><img
                                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=256&amp;h=256&amp;q=80"
                                            alt="Freelancer" class="w-20 h-20 rounded-full object-cover mb-3">
                                        <h3 class="text-lg font-semibold text-gray-900">David Wilson</h3>
                                        <p class="text-indigo-600 font-medium">Laravel Security Expert</p>
                                        <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-yellow-400">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star h-4 w-4 text-gray-300">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg><span class="text-sm text-gray-500 ml-1">4.7</span></div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 justify-center mb-4"><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Laravel</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Security</span><span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Payment</span>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-gray-700 font-medium">$60/hr</p>
                                        <p class="text-gray-500 text-sm">96% Job Success</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-center"><button
                                        class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">View
                                        Profile</button></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-16">
                    <div class="container mx-auto px-4">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">How Our Secure Freelancing Works</h2>
                            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our platform ensures safe transactions
                                and quality work with our escrow payment system.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                                <div
                                    class="bg-indigo-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-briefcase h-8 w-8 text-indigo-600">
                                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg></div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">1. Post Your Project</h3>
                                <p class="text-gray-600">Describe your project in detail, set your budget, and specify
                                    the skills required for the job.</p>
                            </div>
                            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                                <div
                                    class="bg-indigo-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-users h-8 w-8 text-indigo-600">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg></div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">2. Choose a Freelancer</h3>
                                <p class="text-gray-600">Review proposals, check profiles, ratings, and portfolios to
                                    find the perfect match for your project.</p>
                            </div>
                            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                                <div
                                    class="bg-indigo-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-shield h-8 w-8 text-indigo-600">
                                        <path
                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                        </path>
                                    </svg></div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">3. payment</h3>
                                <p class="text-gray-600">Funds are held in escrow until you approve the work, ensuring
                                    security for both parties.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-16 bg-indigo-50">
                    <div class="container mx-auto px-4">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Enterprise-Grade Security</h2>
                            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our platform is built with advanced
                                security features to protect your data and payments.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-indigo-100 h-12 w-12 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lock h-6 w-6 text-indigo-600">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg></div>
                                    <h3 class="text-lg font-semibold text-gray-900">Secure Payments</h3>
                                </div>
                                <p class="text-gray-600">All transactions are protected with bank-level security and our
                                    escrow system.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-indigo-100 h-12 w-12 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-shield h-6 w-6 text-indigo-600">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                            </path>
                                        </svg></div>
                                    <h3 class="text-lg font-semibold text-gray-900">Fraud Protection</h3>
                                </div>
                                <p class="text-gray-600">Advanced algorithms and manual reviews to detect and prevent
                                    fraudulent activities.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-indigo-100 h-12 w-12 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle h-6 w-6 text-indigo-600">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></div>
                                    <h3 class="text-lg font-semibold text-gray-900">Verified Freelancers</h3>
                                </div>
                                <p class="text-gray-600">All freelancers undergo identity verification and skill
                                    assessment.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-indigo-100 h-12 w-12 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-award h-6 w-6 text-indigo-600">
                                            <circle cx="12" cy="8" r="6"></circle>
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                                        </svg></div>
                                    <h3 class="text-lg font-semibold text-gray-900">Dispute Resolution</h3>
                                </div>
                                <p class="text-gray-600">Fair and transparent process to resolve any issues between
                                    clients and freelancers.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-16 bg-indigo-700">
                    <div class="container mx-auto px-4">
                        <div class="max-w-4xl mx-auto text-center">
                            <h2 class="text-3xl font-bold text-white mb-6">Ready to Find the Perfect Freelancer?</h2>
                            <p class="text-xl text-indigo-100 mb-8">Join thousands of businesses who have successfully
                                completed projects on our platform.</p>
                            <div class="flex flex-col sm:flex-row justify-center gap-4"><button
                                    class="bg-white text-indigo-700 font-medium py-3 px-8 rounded-lg shadow-md hover:bg-indigo-50 transition">Post
                                    a Project</button><button
                                    class="bg-indigo-600 text-white font-medium py-3 px-8 rounded-lg shadow-md border border-indigo-500 hover:bg-indigo-800 transition">Browse
                                    Freelancers</button></div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bg-gray-800 text-white">
                <div class="container mx-auto px-4 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <div class="flex items-center space-x-2 mb-6"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield h-8 w-8 text-indigo-400">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg><span class="text-xl font-bold">SecureFreelance</span></div>
                            <p class="text-gray-400 mb-6">The most secure platform for hiring freelancers and managing
                                payments.</p>
                            <div class="flex space-x-4"><a href="#" class="text-gray-400 hover:text-white"><svg
                                        class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd"></path>
                                    </svg></a><a href="#" class="text-gray-400 hover:text-white"><svg class="h-6 w-6"
                                        fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                        </path>
                                    </svg></a><a href="#" class="text-gray-400 hover:text-white"><svg class="h-6 w-6"
                                        fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd"></path>
                                    </svg></a><a href="#" class="text-gray-400 hover:text-white"><svg class="h-6 w-6"
                                        fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd"></path>
                                    </svg></a></div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">For Clients</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">How to Hire</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Talent Marketplace</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Payment Protection</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Enterprise Solutions</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Success Stories</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">For Freelancers</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">Find Work</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Create Profile</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Get Paid</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Community</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Skill Tests</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Resources</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">Help &amp; Support</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Trust &amp; Safety</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-t border-gray-700 mt-12 pt-8">
                        <p class="text-gray-400 text-center">© 2025 SecureFreelance. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script type="module" src="/src/main.tsx"></script>


</body>

</html>