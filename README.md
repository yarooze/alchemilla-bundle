# alchemilla-bundle
Graph visualisation symfony bundle


## Install

### Add repository to `composer.json`


    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:yarooze/alchemilla-bundle.git"
        }
    ]

### add bundle

    composer require yarooze/alchemilla-bundle
    
    php bin/console assets:install

### remove bundle

    composer remove yarooze/alchemilla-bundle


## JS

### Version 0.* Alchemy plugin
    composer: "yarooze/alchemilla-bundle": "0.0.0"



    <link rel="stylesheet" href="{{ asset('bundles/alchemilla/vendor.css') }}" />
    <link rel="stylesheet" href="{{ asset('bundles/alchemilla/alchemy.css') }}" />
    <script type="text/javascript" src="{{ asset('bundles/alchemilla/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bundles/alchemilla/alchemy.js') }}"></script>

    <div class="alchemy" id="alchemy"></div>
    
    <script src="http://cdn.graphalchemist.com/alchemy.min.js"></script>
    <script type="text/javascript">
            var config = {
                dataSource: 'data/charlize.json',
                };
    
            alchemy = new Alchemy(config)
    </script>


