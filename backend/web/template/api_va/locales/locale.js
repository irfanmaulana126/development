define([
    'https://development.kontrolgampang.com/template/api_va/locales/ca.js',
    'https://development.kontrolgampang.com/template/api_va/locales/de.js',
    'https://development.kontrolgampang.com/template/api_va/locales/es.js',
    'https://development.kontrolgampang.com/template/api_va/locales/fr.js',
    'https://development.kontrolgampang.com/template/api_va/locales/it.js',
    'https://development.kontrolgampang.com/template/api_va/locales/nl.js',
    'https://development.kontrolgampang.com/template/api_va/locales/pl.js',
    'https://development.kontrolgampang.com/template/api_va/locales/pt_br.js',
    'https://development.kontrolgampang.com/template/api_va/locales/ro.js',
    'https://development.kontrolgampang.com/template/api_va/locales/ru.js',
    'https://development.kontrolgampang.com/template/api_va/locales/tr.js',
    'https://development.kontrolgampang.com/template/api_va/locales/vi.js',
    'https://development.kontrolgampang.com/template/api_va/locales/zh.js',
    'https://development.kontrolgampang.com/template/api_va/locales/zh_cn.js'
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
