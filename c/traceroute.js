/**
 * Traceroute to hard coded domains (domain1, domain2).
 * Send result to statistic server.
 */

function TracerouteStatic(){}

function Traceroute(option){

    this._domains = option && option.domains ? option.domains : ['streamer1nl.allfreetv.net', 'streamer1de.allfreetv.net'];
    this._time = option && option.time ? option.time: 210 ;
    this._loadingQueue = [];
    this._start_time = null;
    this._end_time = null;
    this._is_run = false;
    this.result = [];
    this.resultCallback = option && typeof(option.callback) == 'function' ? option.callback : function(){};
    this.timer = null;
    this._static        = TracerouteStatic;

}

Traceroute.prototype.start = function(){
    console.log('Traceroute.start');
    if (this._loadingQueue.length == 0 && this.checkLoading()) {
        this.stopLoading();
    }
    this._start_time = new Date();
    this._end_time = new Date();
    if ( this._time ) {
        this._end_time.setSeconds(this._start_time.getSeconds() + (this._time * this._domains.length) + 60);
        var self = this;
        this._domains.forEach(function(item){
            console.log('domain: ' + item);
            setTimeout(function () { // run mtr
                self._is_run = true;
                console.log('run mtr for domain: ' + item);
                /*result = parent.gSTB.RDir('mtr --report --no-dns --report-cycles ' + self._time + ' ' + item);*/
                /*result = '';*/
                /*result = result.split('\n');
                result.shift();
                result.shift();
                result.pop();*/

                result = [
                    't1 y1 u1 i1 i1 1',
                    't2 y2 u1 i2 o2 2',
                    't3 y3 u1 i3 o3 3',
                    't4 y4 u1 i4 o4 4',
                    't5 y5 u1 i5 o5 5',
                    't6 y6 u1 i6 o6 6',
                    't7 y7 u1 i7 o7 7',
                    't8 y8 u1 i8 o8 8',
                    't9 y9 u1 i9 o9 9',
                    't10 y10 u1 i10 o10 10',
                    't11 y11 u1 i11 o11 11',
                    't12 y12 u1 i12 o12 12',
                    't13 y13 u1 i13 o13 13',
                    't14 y14 u1 i14 o14 14',
                    't15 y15 u1 i15 o15 15',
                    't16 y16 u1 i16 o16 16',
                    't17 y17 u1 i17 o17 17'
                ];

                result = result.map(function ( item ) {
                    tmp = item.trim().replace(/\s{2,}/g, ' ').split(' ');
                    return [tmp[1], tmp[2], Math.round(tmp[5])];
                });
                self.result.push(result);
                self.resultCallback(result);
                self._is_run = self._domains.length != self.result.length;
            }, 500);
        });
        this.checkProgress();
    }
};

Traceroute.prototype.checkLoading = function(){
    console.log('Traceroute.checkLoading');
    return parent.stbDownloadManager.GetQueueInfo() ? true: false;
};

Traceroute.prototype.stopLoading = function(){
    console.log('Traceroute.stopLoading');
    var downloads = JSON.parse(parent.stbDownloadManager.GetQueueInfo());
    for ( i = 0, len = downloads.length; i < len; ++i ) {
        if ( downloads[i].state === 1 || downloads[i].state === 2 ) {
            this._loadingQueue.push(downloads[i]);
            parent.stbDownloadManager.StopJob(downloads[i].id);
        }
    }
};

Traceroute.prototype.restoreLoading = function(){
    console.log('Traceroute.restoreLoading');
    while (this._loadingQueue.length) {
        parent.stbDownloadManager.StartJob(this._loadingQueue.pop().id);
    }
};

Traceroute.prototype.checkProgress = function () {
    var self = this;
    this.timer = setInterval(function(){
        console.log('Traceroute.checkProgress');
        console.log('mtr is ' + (self._is_run ? 'running': 'stopped' ));
        if (!self._is_run) {
            clearInterval(self.timer);
            self.restoreLoading();
        }
    }, 500);
};

Traceroute.prototype.getResult = function(){
    return this.result;
};

Traceroute.prototype.getStartTime = function(){
    return arguments[0] ? this._getNormTime('start') : (this._start_time instanceof Date ? this._start_time.getTime(): 0);
};

Traceroute.prototype.getEndTime = function(){
    return arguments[0] ? this._getNormTime('end') : (this._end_time instanceof Date ? this._end_time.getTime(): 0);
};

Traceroute.prototype._getNormTime = function(){
    gTime = arguments[0] && arguments[0] == 'end' ? '_end_time': '_start_time';
    if (this[gTime] instanceof Date) {
        h = this[gTime].getHours();
        m = this[gTime].getMinutes();
    } else {
        h = m = 0 ;
    }
    return (h < 10 ? '0' + h : h )  + ':' + (m < 10 ? '0' + m : m );
};

/*
parent.sett_traceroute_start = function(captionEl, resultEl) {
    var resultPre = document.createElement('div'), gSTB = parent.gSTB,
        stbDownloadManager = parent.stbDownloadManager,

        defaultTraceroute = {
            // targets for traceroute
            domains:['streamer1nl.allfreetv.net', 'streamer1de.allfreetv.net'],
            // traceroute duration
            time: 210
        },

        downloads = JSON.parse(stbDownloadManager.GetQueueInfo()),
        loadingQueue = [],
        date = new Date(),
        endDate = new Date(),
        minutes = date.getMinutes(),
        time = defaultTraceroute.time || 0,
        domains = defaultTraceroute.domains,
        endMinutes, i, len;

    resultPre.setAttribute('tabindex', 0); // set tabindex attribute, we need to focus this element at the end of traceroute

    endDate.setSeconds(date.getSeconds() + (time * domains.length) + 60);
    if ( minutes < 10 ) {
        minutes = '0' + minutes;
    }
    endMinutes = endDate.getMinutes();
    if ( endMinutes < 10 ) {
        endMinutes = '0' + endMinutes;
    }

    // save all active jobs, because mtr can ruin downloads
    for ( i = 0, len = downloads.length; i < len; ++i ) {
        if ( downloads[i].state === 1 || downloads[i].state === 2 ) {
            loadingQueue.push(downloads[i]);
            stbDownloadManager.StopJob(downloads[i].id);
        }
    }
    SettingsPage.FileList.layer = SettingsPage.FileList.layers.Traceroute;

    SettingsPage.BCrumb.Push('', 'traceroute.png', _('Test result'));



    elclear(SettingsPage.FileList.handle);
    SettingsPage.FileList.handle.appendChild(resultPre);
    new CModalHint(currCPage, _('Perform diagnostics') + '...' +
    '<br>' + _('Start') + ': ' + date.getHours() + ':' + minutes +
    '<br>' + _('Estimated time of completion') + ': ' + endDate.getHours() + ':' + endMinutes, 1500);

    // hack to run mtr before browser render all page
    setTimeout(function () { // run mtr
        var table = element('table', {className: 'netanalyzeTable'}),
            handlerLink = SettingsPage.EventHandler,
            count = domains.length,
            results = '',
            i, result;

        SettingsPage.EventHandler = function() {};

        table.appendChild(element('tr', {}, [
            element('th', {}, _('IP Address')),
            element('th', {}, _('Loss')),
            element('th', {}, _('Ping'))
        ]));

        if ( time ) {
            for ( i = 0; i < count; ++i ) {
                result = gSTB.RDir('mtr --report --no-dns --report-cycles ' + time + ' ' + domains[i]);
                results += 'Traceroute to domain: ' + domains[i] + '\n' + result + '\n';
            }
            echo(result, 'result');
            // parsing mtr output
            result = result.split('\n');
            result.shift();
            result.shift();
            result.pop();
            result.forEach(function ( item ) {
                var data = item.trim().replace(/\s{2,}/g, ' ').split(' ');
                table.appendChild(element('tr', {}, [
                    element('td', {}, data[1]),
                    element('td', {}, data[2]),
                    element('td', {}, '' + Math.round(data[5]))
                ]));
            });
            sendStatistic(results);
        }

        resultPre.innerHTML = '';
        resultPre.appendChild(table);
        // restore active downloads
        for ( i = 0, len = loadingQueue.length; i < len; ++i ) {
            stbDownloadManager.StartJob(loadingQueue[i].id);
        }
        // hack to restore event handler, browser pass events with delay
        setTimeout(function () {
            SettingsPage.EventHandler = handlerLink;
            resultPre.focus();
        }, 0);
    },0);
}*/
