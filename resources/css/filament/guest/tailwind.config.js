import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    content: [
        './app/Filament/Guest/**/*.php',
        './app/Providers/**/*.php',
        './resources/views/filament/guest/**/*.blade.php',
        './resources/views/components/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './node_modules/preline/dist/*.js',
    ],
    plugins: [        
        require('preline/plugin'),  
    ],
}
