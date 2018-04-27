define([
    'https://btob.kontrolgampang.com/locales/ca.js',
    'https://btob.kontrolgampang.com/locales/de.js',
    'https://btob.kontrolgampang.com/locales/es.js',
    'https://btob.kontrolgampang.com/locales/fr.js',
    'https://btob.kontrolgampang.com/locales/it.js',
    'https://btob.kontrolgampang.com/locales/nl.js',
    'https://btob.kontrolgampang.com/locales/pl.js',
    'https://btob.kontrolgampang.com/locales/pt_br.js',
    'https://btob.kontrolgampang.com/locales/ro.js',
    'https://btob.kontrolgampang.com/locales/ru.js',
    'https://btob.kontrolgampang.com/locales/tr.js',
    'https://btob.kontrolgampang.com/locales/vi.js',
    'https://btob.kontrolgampang.com/locales/zh.js',
    'https://btob.kontrolgampang.com/locales/zh_cn.js'
], function() {
    var langId = (navigator.language || navigator.userLanguage).toLowerCase().replace('-', '_');
    var language = langId.substr(0, 2);
    var locales = {};

    for (index in arguments) {
        for (property in arguments[index])
            locales[property] = arguments[index][property];
    }
    if ( ! locales['en'])
        locales['en'] = {};

    if ( ! locales[langId] && ! locales[language])
        language = 'en';

    var locale = (locales[langId] ? locales[langId] : locales[language]);

    function __(text) {
        var index = locale[text];
        if (index === undefined)
            return text;
        return index;
    };

    function setLanguage(language) {
        locale = locales[language];
    }

    return {
        __         : __,
        locales    : locales,
        locale     : locale,
        setLanguage: setLanguage
    };
});
