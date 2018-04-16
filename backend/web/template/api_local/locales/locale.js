define([
    'http://development.kontrolgampang.com/template/api_local/locales/ca.js',
    'http://development.kontrolgampang.com/template/api_local/locales/de.js',
    'http://development.kontrolgampang.com/template/api_local/locales/es.js',
    'http://development.kontrolgampang.com/template/api_local/locales/fr.js',
    'http://development.kontrolgampang.com/template/api_local/locales/it.js',
    'http://development.kontrolgampang.com/template/api_local/locales/nl.js',
    'http://development.kontrolgampang.com/template/api_local/locales/pl.js',
    'http://development.kontrolgampang.com/template/api_local/locales/pt_br.js',
    'http://development.kontrolgampang.com/template/api_local/locales/ro.js',
    'http://development.kontrolgampang.com/template/api_local/locales/ru.js',
    'http://development.kontrolgampang.com/template/api_local/locales/tr.js',
    'http://development.kontrolgampang.com/template/api_local/locales/vi.js',
    'http://development.kontrolgampang.com/template/api_local/locales/zh.js',
    'http://development.kontrolgampang.com/template/api_local/locales/zh_cn.js'
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
