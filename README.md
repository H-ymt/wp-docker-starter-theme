# wp-docker-starter-theme

## 🛜 WP Environment

本テンプレートはWordPressのアップデートが常に行われていくことを前提にWordPressの最新バージョンを取得します。
バージョンを固定する場合は、プロジェクト開始時に[Release Archive](https://ja.wordpress.org/download/releases/) よりリンク先をコピーして`.wp-env.json` にバージョンを指定してください。

- WP ver latest
- PHP ver 8.2

## 💰 Paid Plugins

有料プラグインについては下記のリンクからダウンロードをして `/plugins`配下に設置してください。Gitで管理されます。

- [advanced-custom-fields-pro](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/admin-columns-pro/)
- [all-in-one-wp-migration-unlimited-extension](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/all-in-one-wp-migration-unlimited-extension/)

## 🛠️ Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js >= 16

## 🚀 Local Environment Setup

1. package install

```bash
pnpm ci or pnpm install
```

2. wp start up & db import

```bash
pnpm run wp:setup
```

3. frontend build start

```bash
pnpm run dev
```

open <http://localhost:3030/>

- wp login

open <http://localhost:3030/wp-admin>

```bash
user : admin
password : password
```

## 🏠 Browser Sync

ネットワーク経由でのアクセスをする場合は`.wp-env.json`の`VITE_SERVER`の値を自身のローカルIPに変更してください。<br>
こちらは暫定対応です。`.wp-env.json`はGit管理されているので、こちらの値を上書きしてコミットしないように注意してください。

```bash
"VITE_SERVER": "http://0.0.0.0:3000"
```

## 💻 Production Upload

```bash
pnpm run build
```

アップロードの際は`/dist`以下をアップロードしてください。

## 💅 Styling

クラスの命名については BEM を採用しています。

## 🌙 How to reference images from css

$base-dir は設定をするとCSSでローカルと本番で異なる参照をすることができます。

```bash
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 🍰 Assets

ローカル環境ではVITEの開発サーバー、本番環境ではテーマのルートを参照する必要があるため<br>
`vite-config.php`の関数を使用してAssetsにアクセスしてください。

```bash
<link rel="stylesheet" href="<?= vite_src_css("app.scss") ?>">
```

```bash
<script type="module" crossorigin src="<?= vite_src_js("app.js") ?>"></script>
```

```bash
<img src="<?= vite_src_static('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```

## ✨ Image

ローカルの画像は最適化処理のための簡易的なパーツを用意しています。`src/parts/picture-local.php`を使用するようにしてください。

```bash
<?php get_template_part("./parts/picture-local", null, [
  "images" => [
      "src" => "sample-01.jpg",
      "width" => "1280",
      "height" => "600",
      "alt" => "",
  ],
]); ?>
```

## 😎 Svg Sprite

```bash
<?= get_svg_sprite('icon-blank') ?>
```

## ✋ Lint

```bash
pnpm run lint:check
```

```bash
pnpm run lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも Lint が実行されます。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
