import 'vite/dynamic-import-polyfill'
import '../css/app.css'

import './bootstrap'

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'


InertiaProgress.init()

createInertiaApp({
  resolve: async (name) => {
    return (await import(`./Pages/${ name }.vue`)).default
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
