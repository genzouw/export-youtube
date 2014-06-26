        <h2>Top</h2>

        <p><a href="http://youtube.com">Youtube</a>から、気に入った動画をダウンロードできます。</p>
        <p>
            <ol>
                 <li>スマートフォンやタブレットに保存し、オフラインで閲覧</li>
                 <li>Youtube上の動画が削除されたり、誤って自分で削除するためにバックアップを保存</li>
                 <li>mp4またはwebm形式でダウンロード</li>
            </ol>
        </p>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">動画ページURL</div>
                    <div class="panel-body">
                        <?php echo $this->Form->create(
                            // 'youtube',
                            '',
                            array(
                                'controller' => 'pages',
                                'action' => 'index',
                                // 'enctype' => 'multipart/form-data',
                                'inputDefaults' => array(
                                    'div' => false,
                                    'label' => false,
                                    'error' => false,
                                ),
                                'class' => 'form-horizontal',
                            )
                        ); ?>
                        <div class="form-group">
                            <div class="col-sm-7">
                                <input type="text" name="url" placeholder="Youtube動画ページのURLを入力" class="form-control" />
                            </div>
                            <div class="col-sm-5">
                                <button id="download_btn" class="btn btn-primary">動画ファイル作成開始！</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12" style="text-align:center;">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                                <span class="glyphicon glyphicon-arrow-down"></span>
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </div>
                        </div>

                        <div class="form-group" style="text-align:center;">
                            <div class="col-sm-12">
                            <?php if (isset($exportedFileName)) { ?>
                                <div class="alert alert-success">
                                    <a href="/downloads/<?php echo h($exportedFileName); ?>" style="font-size: 150%; font-weight: bold;">
                                        <span class="glyphicon glyphicon-download-alt"></span>
                                        こちらのリンクを右クリックし「リンク先を保存」してください。
                                    </a>
                                </div>
                            <?php } else  { ?>
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-remove"></span> <strong style="">まだ作成されていません。</strong>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h2>使い方</h2>

        <h3>1.Youtubeにて、ダウンロードしたい動画ページを開きます。</h3>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <img class="img-thumbnail" src="http://export-youtube.xyz/img/001.png" style="border: 5px solid gray;">
            </div>
        </div>
        
        <h3>2.URLをコピーします。</h3>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <img class="img-thumbnail" src="http://export-youtube.xyz/img/002.png" style="border: 5px solid gray;">
            </div>
        </div>
        
        <h3>3.URLを入力します。</h3>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <p>当サイトのULR入力欄にペーストし、ボタンを押します。</p>
            </div>
        </div>
        

        <h3>4.動画を保存します。</h3>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <img class="img-thumbnail" src="http://export-youtube.xyz/img/003.png" style="border: 5px solid gray;">
            </div>
        </div>

