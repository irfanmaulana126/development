define([
    'http://development.kontrolgampang.com/template/api_ppob/locales/ca.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/de.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/es.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/fr.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/it.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/nl.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/pl.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/pt_br.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/ro.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/ru.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/tr.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/vi.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/zh.js',
    'http://development.kontrolgampang.com/template/api_ppob/locales/zh_cn.js'
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
