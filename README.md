# wp-docker-starter-theme

## 開発環境

本テンプレートはWordPressのアップデートが常に行われていくことを前提に、常にWordPressの最新バージョンを取得します。<br />
バージョンを固定する場合は、プロジェクト開始時に[Release Archive](https://ja.wordpress.org/download/releases/) よりリンク先をコピーして`.wp-env.json` にバージョンを指定してください。

```js
// WordPressバージョンを固定する場合(/wp-env.json)
{
  "core": "ここにリンクを入れる",
}
```

- WordPress: latest
- PHP: 8.2
- node: v20.11.0〜
- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)

## 有料プラグインについて

有料プラグインについては下記のリンクからダウンロードをして `/plugins`配下に設置してください。Gitで管理されます。

## ローカル開発環境のセットアップ

1. package install

```bash
npm install or npm ci
or
pnpm install or pnpm ci
```

2. wp start up & db import

```bash
npm wp:setup
or
pnpm wp:setup
```

3. frontend build start

```bash
npm run dev
or
pnpm dev
```

open <http://localhost:3030/>

wp login <http://localhost:3030/wp-admin>

```bash
user : admin
password : password
```

## Browser Sync

ネットワーク経由でのアクセスをする場合は[`.wp-env.json`](.wp-env.json)の`VITE_SERVER`の値を自身のローカルIPに変更してください。<br>
[`.wp-env.json`](.wp-env.json)はGit管理されているので、下記の値を上書きしてコミットしないように注意してください。

```bash
"VITE_SERVER": "http://0.0.0.0:3000"
```

## 本番環境へのアップロード

```bash
pnpm build
```

アップロードの際は`/dist`以下のファイルをアップロードしてください。

## Styling

クラスの命名については BEM を採用しています。

## How to reference images from css

`$base-dir` は設定をするとCSSでローカルと本番で異なる参照をすることができます。<br />
主にCSSファイルでurlを指定するときに使用します。

```bash
background-image: url($base-dir + "assets/images/icon.svg");
```

## Assets

ローカル環境ではVITEの開発サーバー、本番環境ではテーマのルートを参照する必要があるため<br>
`vite-config.php`の関数を使用してAssetsにアクセスしてください。

```bash
<link rel="stylesheet" href="<?= vite_src_css("main.scss") ?>">
```

```bash
<script type="module" crossorigin src="<?= vite_src_js("app.js") ?>"></script>
```

```bash
<img src="<?= vite_src_static('icon.svg') ?>" width="30" height="30" alt="">
```

## Svg Sprite

```bash
<?= get_svg_sprite('icon') ?>
```

## Lint

```bash
pnpm run lint:check
```

```bash
pnpm run lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の VSCode プラグインをインストールすると VSCode 保存時にも Lint が実行されます。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 公式ドキュメント

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
