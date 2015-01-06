{
  ___.loadModule({
      'instantiate': function (___, IMPORTS___) {
        var dis___ = IMPORTS___;
        var moduleResult___, x0___, x1___, x2___, x3___, x4___, x5___, x6___,
        x7___, x8___, x9___, x10___, x11___, x12___, x13___, x14___, x15___,
        x16___, x17___, x18___, x19___;
        moduleResult___ = ___.NO_RESULT;
        new (x0___ = IMPORTS___.KISSY_v___? IMPORTS___.KISSY:
          ___.ri(IMPORTS___, 'KISSY'), x0___.DataLazyload_v___?
          x0___.DataLazyload: x0___.v___('DataLazyload')).new___(___.iM([
              'diff', 500 ]));
        IMPORTS___.w___('$', IMPORTS___.jQuery_v___? IMPORTS___.jQuery:
          ___.ri(IMPORTS___, 'jQuery'));
        IMPORTS___.w___('url_forward', (x1___ = (IMPORTS___.$_v___?
              IMPORTS___.$: ___.ri(IMPORTS___, '$')).i___('.showMsg'),
            x1___.attr_m___? x1___.attr('data-url'): x1___.m___('attr', [
                'data-url' ])));
        IMPORTS___.w___('ms', (x2___ = (IMPORTS___.$_v___? IMPORTS___.$:
              ___.ri(IMPORTS___, '$')).i___('.showMsg'), x2___.attr_m___?
            x2___.attr('data-url'): x2___.m___('attr', [ 'data-url' ])));
        x3___ = IMPORTS___.console_v___? IMPORTS___.console: ___.ri(IMPORTS___,
          'console'), x4___ = IMPORTS___.url_forward_v___?
          IMPORTS___.url_forward: ___.ri(IMPORTS___, 'url_forward'),
        x3___.log_m___? x3___.log(x4___): x3___.m___('log', [ x4___ ]);
        x5___ = IMPORTS___.console_v___? IMPORTS___.console: ___.ri(IMPORTS___,
          'console'), x6___ = IMPORTS___.ms_v___? IMPORTS___.ms:
        ___.ri(IMPORTS___, 'ms'), x5___.log_m___? x5___.log(x6___):
        x5___.m___('log', [ x6___ ]);
        x7___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
          .i___('.member_btn'), x8___ = ___.f(function () {
            var x0___;
            x0___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
              .i___('.member_mini_nav'), x0___.show_m___? x0___.show():
            x0___.m___('show', [ ]);
          }), x9___ = ___.f(function () {
            var x0___;
            x0___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
              .i___('.member_mini_nav'), x0___.hide_m___? x0___.hide():
            x0___.m___('hide', [ ]);
          }), x7___.hover_m___? x7___.hover(x8___, x9___): x7___.m___('hover',
          [ x8___, x9___ ]);
        IMPORTS___.w___('fromuserid', (x10___ = (IMPORTS___.$_v___?
              IMPORTS___.$: ___.ri(IMPORTS___, '$')).i___('.fromuserid'),
            x10___.attr_m___? x10___.attr('data-fromuser-tips'):
            x10___.m___('attr', [ 'data-fromuser-tips' ])));
        if ((IMPORTS___.fromuserid_v___? IMPORTS___.fromuserid:
            ___.ri(IMPORTS___, 'fromuserid')) != 0) {
          x11___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
            .i___('.banner-pic'), x12___ = '<a href=\'/member.php?fromuserid='
            + (IMPORTS___.fromuserid_v___? IMPORTS___.fromuserid:
            ___.ri(IMPORTS___, 'fromuserid')) +
            '\' target=\'_blank\'><span class=\'btn-close J_LowsClose\'></span></a>',
          x11___.html_m___? x11___.html(x12___): x11___.m___('html', [ x12___ ]
          );
          x13___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
            .i___('.trigger-wrap .prev'), x14___ =
            '<a href=\'/member.php?fromuserid=' + (IMPORTS___.fromuserid_v___?
            IMPORTS___.fromuserid: ___.ri(IMPORTS___, 'fromuserid')) +
            '\' target=\'_blank\'></a>', x13___.html_m___? x13___.html(x14___):
          x13___.m___('html', [ x14___ ]);
          x15___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
            .i___('.trigger-wrap .next'), x16___ =
            '<a href=\'/member.php?fromuserid=' + (IMPORTS___.fromuserid_v___?
            IMPORTS___.fromuserid: ___.ri(IMPORTS___, 'fromuserid')) +
            '\' target=\'_blank\'></a>', x15___.html_m___? x15___.html(x16___):
          x15___.m___('html', [ x16___ ]);
          x17___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
            .i___('.lows-banner'), x17___.slideDown_m___? x17___.slideDown(300)
            : x17___.m___('slideDown', [ 300 ]);
          x18___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$'))
            .i___('.J_LowsClose'), x19___ = ___.f(function () {
              var x0___;
              x0___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___, '$')
              ).i___('.lows-banner'), x0___.slideUp_m___? x0___.slideUp(300):
              x0___.m___('slideUp', [ 300 ]);
            }), x18___.click_m___? x18___.click(x19___): x18___.m___('click', [
              x19___ ]);
        }
        moduleResult___ = (IMPORTS___.$ajax_v___? IMPORTS___.$ajax:
          ___.ri(IMPORTS___, '$ajax')).i___(___.iM([ 'jsonpCallback', 'jsonp',
              'jsonp', 'callback', 'url', '/api.php?op=login', 'data', ___.iM([
                  'p', 1, 'encodeCpt', (IMPORTS___.encodeURIComponent_v___?
                    IMPORTS___.encodeURIComponent: ___.ri(IMPORTS___,
                      'encodeURIComponent'))
                  .i___('\u4e2d\u65871\u6d4b\u8bd5\u6210\u529f'), 'encode',
                  (IMPORTS___.encodeURI_v___? IMPORTS___.encodeURI:
                   ___.ri(IMPORTS___, 'encodeURI'))
                  .i___('\u4e2d\u65872\u6d4b\u8bd5\u6210\u529f') ]), 'success',
              (function () {
                 function success$_lit(data, textStatus, xhr) {
                   var x0___, x1___, x2___, x3___, x4___, x5___, x6___, x7___,
                   x8___, x9___, x10___, x11___, x12___, x13___;
                   x0___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___,
                       '$')).i___('.member_sign a'), x1___ = data.login_v___?
                     data.login: data.v___('login'), x0___.html_m___?
                     x0___.html(x1___): x0___.m___('html', [ x1___ ]);
                   x2___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___,
                       '$')).i___('.member_point a'), x3___ = data.point_v___?
                     data.point: data.v___('point'), x2___.html_m___?
                     x2___.html(x3___): x2___.m___('html', [ x3___ ]);
                   x4___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___,
                       '$')).i___('.tips a'), x5___ = data.tips_v___?
                     data.tips: data.v___('tips'), x4___.html_m___?
                     x4___.html(x5___): x4___.m___('html', [ x5___ ]);
                   x6___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___,
                       '$')).i___('.pots a'), x7___ = data.point_v___?
                     data.point: data.v___('point'), x6___.html_m___?
                     x6___.html(x7___): x6___.m___('html', [ x7___ ]);
                   x8___ = (IMPORTS___.$_v___? IMPORTS___.$: ___.ri(IMPORTS___,
                       '$')).i___('.prizes_num'), x9___ = data.prizes_v___?
                     data.prizes: data.v___('prizes'), x8___.html_m___?
                     x8___.html(x9___): x8___.m___('html', [ x9___ ]);
                   x10___ = (IMPORTS___.$_v___? IMPORTS___.$:
                     ___.ri(IMPORTS___, '$')).i___('.orders_num'), x11___ =
                     data.orders_v___? data.orders: data.v___('orders'),
                   x10___.html_m___? x10___.html(x11___): x10___.m___('html', [
                       x11___ ]);
                   x12___ = (IMPORTS___.$_v___? IMPORTS___.$:
                     ___.ri(IMPORTS___, '$')).i___('.login_tip'), x13___ =
                     data.tips_v___? data.tips: data.v___('tips'),
                   x12___.html_m___? x12___.html(x13___): x12___.m___('html', [
                       x13___ ]);
                 }
                 return ___.f(success$_lit, 'success$_lit');
               })(), 'complete', (function () {
                  function complete$_lit(data) {}
                  return ___.f(complete$_lit, 'complete$_lit');
                })(), 'error', (function () {
                  function error$_lit() {
                    var x0___;
                    x0___ = IMPORTS___.console_v___? IMPORTS___.console:
                    ___.ri(IMPORTS___, 'console'), x0___.log_m___?
                      x0___.log('KissyIO Error'): x0___.m___('log', [
                        'KissyIO Error' ]);
                  }
                  return ___.f(error$_lit, 'error$_lit');
                })(), 'dataType', 'jsonp' ]));
        return moduleResult___;
      },
      'cajolerName': 'com.google.caja',
      'cajolerVersion': '<unknown>',
'cajoledDate': 1420509444363
});
}