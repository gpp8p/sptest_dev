<!DOCTYPE html>
<html>
<head>
    <style>
        .cardStyle {
            height: 100%;
            width: 100%;
            overflow: auto;
        }
        .cardHeader {
            color: blue;
            height: 10%;
            background-color: #fff722;
            font-family: Geneva;
            font-size: 12px;
            font-style: normal;
            font-weight: bold;
        }
        .cardBody {
            height: 90%;
            padding:5px;
        }
        .cardFooter {
            height: 5%;
            width:100%;
            margin-left: auto;
            margin-right: auto;
            text-align: center
        }
        .flex-container {
            display: flex;
            justify-content: space-evenly;
            width:100%;
            align-items: baseline;
            margin-top: 6px;

        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .mlhz {
            {{$hzLinkMenuColor}};
        }
        .mlhz:hover {
            color:red;
        }




        :root {
            --ck-color-mention-background: hsla(341, 100%, 30%, 0.1);
            --ck-color-mention-text: hsl(341, 100%, 30%);
            --ck-highlight-marker-blue: hsl(201, 97%, 72%);
            --ck-highlight-marker-green: hsl(120, 93%, 68%);
            --ck-highlight-marker-pink: hsl(345, 96%, 73%);
            --ck-highlight-marker-yellow: hsl(60, 97%, 73%);
            --ck-highlight-pen-green: hsl(112, 100%, 27%);
            --ck-highlight-pen-red: hsl(0, 85%, 49%);
            --ck-image-style-spacing: 1.5em;
            --ck-todo-list-checkmark-size: 16px;
        }

        /* ckeditor5-image/theme/imageresize.css */
        .ck-content .image.image_resized {
            max-width: 100%;
            display: block;
            box-sizing: border-box;
        }
        /* ckeditor5-image/theme/imageresize.css */
        .ck-content .image.image_resized img {
            width: 90%;
        }
        /* ckeditor5-image/theme/imageresize.css */
        .ck-content .image.image_resized > figcaption {
            display: block;
        }
        /* ckeditor5-image/theme/imagestyle.css */
        .ck-content .image-style-side {
            float: right;
            margin-left: var(--ck-image-style-spacing);
            max-width: 50%;
        }
        /* ckeditor5-image/theme/imagestyle.css */
        .ck-content .image-style-align-left {
            float: left;
            margin-right: var(--ck-image-style-spacing);
        }
        /* ckeditor5-image/theme/imagestyle.css */
        .ck-content .image-style-align-center {
            margin-left: auto;
            margin-right: auto;
        }
        /* ckeditor5-image/theme/imagestyle.css */
        .ck-content .image-style-align-right {
            float: right;
            margin-left: var(--ck-image-style-spacing);
        }
        /* ckeditor5-image/theme/image.css */
        .ck-content .image {
            display: table;
            clear: both;
            text-align: center;
            margin: 1em auto;
        }
        /* ckeditor5-image/theme/image.css */
        .ck-content .image img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            min-width: 50px;
        }
        /* ckeditor5-image/theme/imagecaption.css */
        .ck-content .image > figcaption {
            display: table-caption;
            caption-side: bottom;
            word-break: break-word;
            color: hsl(0, 0%, 20%);
            background-color: hsl(0, 0%, 97%);
            padding: .6em;
            font-size: .75em;
            outline-offset: -1px;
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .marker-yellow {
            background-color: var(--ck-highlight-marker-yellow);
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .marker-green {
            background-color: var(--ck-highlight-marker-green);
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .marker-pink {
            background-color: var(--ck-highlight-marker-pink);
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .marker-blue {
            background-color: var(--ck-highlight-marker-blue);
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .pen-red {
            color: var(--ck-highlight-pen-red);
            background-color: transparent;
        }
        /* ckeditor5-highlight/theme/highlight.css */
        .ck-content .pen-green {
            color: var(--ck-highlight-pen-green);
            background-color: transparent;
        }
        /* ckeditor5-font/theme/fontsize.css */
        .ck-content .text-tiny {
            font-size: .7em;
        }
        /* ckeditor5-font/theme/fontsize.css */
        .ck-content .text-small {
            font-size: .85em;
        }
        /* ckeditor5-font/theme/fontsize.css */
        .ck-content .text-big {
            font-size: 1.4em;
        }
        /* ckeditor5-font/theme/fontsize.css */
        .ck-content .text-huge {
            font-size: 1.8em;
        }
        /* ckeditor5-block-quote/theme/blockquote.css */
        .ck-content blockquote {
            overflow: hidden;
            padding-right: 1.5em;
            padding-left: 1.5em;
            margin-left: 0;
            margin-right: 0;
            font-style: italic;
            border-left: solid 5px hsl(0, 0%, 80%);
        }
        /* ckeditor5-block-quote/theme/blockquote.css */
        .ck-content[dir="rtl"] blockquote {
            border-left: 0;
            border-right: solid 5px hsl(0, 0%, 80%);
        }
        /* ckeditor5-basic-styles/theme/code.css */
        .ck-content code {
            background-color: hsla(0, 0%, 78%, 0.3);
            padding: .15em;
            border-radius: 2px;
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content .table {
            margin: 1em auto;
            display: table;
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content .table table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            height: 100%;
            border: 1px double hsl(0, 0%, 70%);
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content .table table td,
        .ck-content .table table th {
            min-width: 2em;
            padding: .4em;
            border: 1px solid hsl(0, 0%, 75%);
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content .table table th {
            font-weight: bold;
            background: hsla(0, 0%, 0%, 5%);
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content[dir="rtl"] .table th {
            text-align: right;
        }
        /* ckeditor5-table/theme/table.css */
        .ck-content[dir="ltr"] .table th {
            text-align: left;
        }
        /* ckeditor5-page-break/theme/pagebreak.css */
        .ck-content .page-break {
            position: relative;
            clear: both;
            padding: 5px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* ckeditor5-page-break/theme/pagebreak.css */
        .ck-content .page-break::after {
            content: '';
            position: absolute;
            border-bottom: 2px dashed hsl(0, 0%, 77%);
            width: 100%;
        }
        /* ckeditor5-page-break/theme/pagebreak.css */
        .ck-content .page-break__label {
            position: relative;
            z-index: 1;
            padding: .3em .6em;
            display: block;
            text-transform: uppercase;
            border: 1px solid hsl(0, 0%, 77%);
            border-radius: 2px;
            font-family: Helvetica, Arial, Tahoma, Verdana, Sans-Serif;
            font-size: 0.75em;
            font-weight: bold;
            color: hsl(0, 0%, 20%);
            background: hsl(0, 0%, 100%);
            box-shadow: 2px 2px 1px hsla(0, 0%, 0%, 0.15);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        /* ckeditor5-media-embed/theme/mediaembed.css */
        .ck-content .media {
            clear: both;
            margin: 1em 0;
            display: block;
            min-width: 15em;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list {
            list-style: none;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list li {
            margin-bottom: 5px;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list li .todo-list {
            margin-top: 5px;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label > input {
            -webkit-appearance: none;
            display: inline-block;
            position: relative;
            width: var(--ck-todo-list-checkmark-size);
            height: var(--ck-todo-list-checkmark-size);
            vertical-align: middle;
            border: 0;
            left: -25px;
            margin-right: -15px;
            right: 0;
            margin-left: 0;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label > input::before {
            display: block;
            position: absolute;
            box-sizing: border-box;
            content: '';
            width: 100%;
            height: 100%;
            border: 1px solid hsl(0, 0%, 20%);
            border-radius: 2px;
            transition: 250ms ease-in-out box-shadow, 250ms ease-in-out background, 250ms ease-in-out border;
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label > input::after {
            display: block;
            position: absolute;
            box-sizing: content-box;
            pointer-events: none;
            content: '';
            left: calc( var(--ck-todo-list-checkmark-size) / 3 );
            top: calc( var(--ck-todo-list-checkmark-size) / 5.3 );
            width: calc( var(--ck-todo-list-checkmark-size) / 5.3 );
            height: calc( var(--ck-todo-list-checkmark-size) / 2.6 );
            border-style: solid;
            border-color: transparent;
            border-width: 0 calc( var(--ck-todo-list-checkmark-size) / 8 ) calc( var(--ck-todo-list-checkmark-size) / 8 ) 0;
            transform: rotate(45deg);
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label > input[checked]::before {
            background: hsl(126, 64%, 41%);
            border-color: hsl(126, 64%, 41%);
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label > input[checked]::after {
            border-color: hsl(0, 0%, 100%);
        }
        /* ckeditor5-list/theme/todolist.css */
        .ck-content .todo-list .todo-list__label .todo-list__label__description {
            vertical-align: middle;
        }
        /* ckeditor5-html-embed/theme/htmlembed.css */
        .ck-content .raw-html-embed {
            margin: 1em auto;
            min-width: 15em;
            font-style: normal;
        }
        /* ckeditor5-horizontal-line/theme/horizontalline.css */
        .ck-content hr {
            margin: 15px 0;
            height: 4px;
            background: hsl(0, 0%, 87%);
            border: 0;
        }
        /* ckeditor5-code-block/theme/codeblock.css */
        .ck-content pre {
            padding: 1em;
            color: hsl(0, 0%, 20.8%);
            background: hsla(0, 0%, 78%, 0.3);
            border: 1px solid hsl(0, 0%, 77%);
            border-radius: 2px;
            text-align: left;
            direction: ltr;
            tab-size: 4;
            white-space: pre-wrap;
            font-style: normal;
            min-width: 200px;
        }
        /* ckeditor5-code-block/theme/codeblock.css */
        .ck-content pre code {
            background: unset;
            padding: 0;
            border-radius: 0;
        }
        /* ckeditor5-mention/theme/mention.css */
        .ck-content .mention {
            background: var(--ck-color-mention-background);
            color: var(--ck-color-mention-text);
        }
        @media print {
            /* ckeditor5-page-break/theme/pagebreak.css */
            .ck-content .page-break {
                padding: 0;
            }
            /* ckeditor5-page-break/theme/pagebreak.css */
            .ck-content .page-break::after {
                display: none;
            }
        }

    </style>
</head>
<body>
<div class="cardStyle ck-content" style="{{$layoutCss}}">
        @foreach($cards as $thisCard)
            @switch($thisCard['card_component'])
                @case('Headline')
                   <div style="{{$thisCard['card_parameters']['style']}}">
                        <span class="flex-container">
                            {!! $thisCard['card_parameters']['content']['title'] !!}
                        </span>
                    <div>
                    <div>
                        <span class="flex-container">
                                    @foreach($thisCard['card_parameters']['content']['links'] as $thisLink)
                                <a style="text-decoration: none;{{$thisCard['elementStyles']['sub']}}" href="{!! $thisLink[0] !!}" class="mlhz">{!! $thisLink[1] !!}</a>
                            @endforeach
                        </span>
                    </div>
                </div>

            </div>

                @break
                @case('youTube')
                    <div style="{{$thisCard['card_parameters']['style']}}" class="video-container">
                                <span class="cardBody">
                                        {!! $thisCard['card_parameters']['content'] !!}
                                </span>
                    </div>
                @break
                @case('RichText')
                    <div style="{{$thisCard['card_parameters']['style']}} padding: 5px; overflow: auto;" >
                        <span class="cardBody">
                            @if (count($thisCard['card_parameters']['content']) >0 )
                           {!! $thisCard['card_parameters']['content']['cardText'] !!}
                            @endif
                        </span>

                    </div>
                @break
                @case('linkMenu')

                    <div style="{{$thisCard['card_parameters']['style']}}">
                        <span class="flex-container">
                            {!! $thisCard['card_parameters']['content']['title'] !!}
                        </span>

                        <div>
                                <div>
                                @if($thisCard['card_parameters']['content']['orient']=='vertical')
                                    <ul>
                                        @foreach($thisCard['card_parameters']['content']['links'] as $thisLink)
                                            <li>
                                                <a class="mlhz" style="text-decoration: none;" href="{!! $thisLink[0] !!}">{!! $thisLink[1] !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="flex-container">
                                        @foreach($thisCard['card_parameters']['content']['links'] as $thisLink)
                                            <a style="text-decoration: none;{{$thisCard['elementStyles']['sub']}}" href="{!! $thisLink[0] !!}" class="mlhz">{!! $thisLink[1] !!}</a>
                                        @endforeach
                                    </span>
                                @endif
                            </div>

                        </div>

                    </div>
                @break
            @case('NavigationMenu')

            <div style="{{$thisCard['card_parameters']['style']}}">
                            <span class="flex-container">
                                {!! $thisCard['card_parameters']['content']['title'] !!}

                            </span>

                <div>
                    <div>
                        @if($thisCard['card_parameters']['content']['orient']=='vertical')
                            <span class=""flex-container>
                                <a href="{{$thisCard['card_parameters']['content']['searchLink']}}" target="_blank">Click Here to Search</a>
                            </span>

                            <ul>
                                @foreach($thisCard['card_parameters']['content']['links'] as $thisLink)
                                    <li>
                                        <a class="mlhz" style="text-decoration: none;" href="{!! $thisLink[0] !!}">{!! $thisLink[1] !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="flex-container">
                                            @foreach($thisCard['card_parameters']['content']['links'] as $thisLink)
                                    <a style="text-decoration: none;{{$thisCard['elementStyles']['sub']}}" href="{!! $thisLink[0] !!}" class="mlhz">{!! $thisLink[1] !!}</a>
                                @endforeach
                                        </span>
                        @endif
                    </div>

                </div>

            </div>
            @break

                @case('loginLink')
                <div style="{{$thisCard['card_parameters']['style']}}">
                <span class="cardBody">
                        {!! $thisCard['card_parameters']['content'] !!}
                </span>
                </div>
                @break
                @case('pdf')
                <div style="{{$thisCard['card_parameters']['style']}}">
                <span class="cardBody">
                        {!! $thisCard['card_parameters']['content'] !!}
                </span>
                </div>
                @break
            @endswitch
        @endforeach
</div>
</body>
</html>