// webpack.config.js
const { VuetifyPlugin } = require('webpack-plugin-vuetify')

module.exports = {
  plugins: [
    new VuetifyPlugin({ autoImport: true }), // Enabled by default
  ],
}