        <h2>動画サイトの動画を保存できます</h2>

        <h3>1.URLを入力</h3>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
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
                <div class="control-group">
                    <label for="url" class="control-label col-sm-2">動画ページURL</label>
                    <div class="controls col-sm-6">
                        <input type="text" name="url" placeholder="Youtube動画ページのURLを入力" class="form-control" />
                    </div>
                </div>
                <div class="btn-group">
                    <button id="download_btn" class="btn btn-primary">動画ファイルをダウンロード</button>
                </div>
            <?php echo $this->Form->end(); ?>
            </div>
        </div>


        <h3>2.動画作成状況</h3>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <?php if (isset($exportedFileName)) { ?>
                <a href="/downloads/<?php echo h($exportedFileName); ?>" style="font-size: 150%; font-weight: bold;">こちらのリンクを右クリックし「リンク先を保存」してください。</a>
                <?php } else  { ?>
                    <strong style="">未完了です。</strong>
                <?php } ?>

            </div>
        </div>

        <div class="row"> </div>

        <h3>使い方</h3>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <p>YoutbeのページURLを入力し、ボタンを押すだけ！</p>
                <p>
                <strong>注意：結構時間がかかるので、気長に待ってください。</strong>
                <img src="/img/001.png" />
                </p>
            </div>
        </div>

