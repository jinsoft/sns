@extends("layouts.app")
@section("title", "最火的社区，没有之一")

@section("container-left")
    <div class="layui-col-md8">
        <div class="fly-panel" style="margin-bottom: 0;">

            <div class="fly-panel-title fly-filter">
                <a href="" class="layui-this">综合</a>
                <span class="fly-mid"></span>
                <a href="">未结</a>
                <span class="fly-mid"></span>
                <a href="">已结</a>
                <span class="fly-mid"></span>
                <a href="">精华</a>
                <span class="fly-filter-right layui-hide-xs">
            <a href="" class="layui-this">按最新</a>
            <span class="fly-mid"></span>
            <a href="">按热议</a>
          </span>
            </div>

            <ul class="fly-list">
                <li>
                    <a href="user/home.html" class="fly-avatar">
                        <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                    </a>
                    <h2>
                        <a class="layui-badge">分享</a>
                        <a href="detail.html">基于 layui 的极简社区页面模版</a>
                    </h2>
                    <div class="fly-list-info">
                        <a href="user/home.html" link>
                            <cite>贤心</cite>
                            <!--
                            <i class="iconfont icon-renzheng" title="认证信息：XXX"></i>
                            <i class="layui-badge fly-badge-vip">VIP3</i>
                            -->
                        </a>
                        <span>刚刚</span>

                        <span class="fly-list-kiss layui-hide-xs" title="悬赏飞吻"><i class="iconfont icon-kiss"></i> 60</span>
                        <!--<span class="layui-badge fly-badge-accept layui-hide-xs">已结</span>-->
                        <span class="fly-list-nums">
                <i class="iconfont icon-pinglun1" title="回答"></i> 66
              </span>
                    </div>
                    <div class="fly-list-badge">
                        <span class="layui-badge layui-bg-black">置顶</span>
                        <!--<span class="layui-badge layui-bg-red">精帖</span>-->
                    </div>
                </li>
                <li>
                    <a href="user/home.html" class="fly-avatar">
                        <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                    </a>
                    <h2>
                        <a class="layui-badge">动态</a>
                        <a href="detail.html">基于 layui 的极简社区页面模版</a>
                    </h2>
                    <div class="fly-list-info">
                        <a href="user/home.html" link>
                            <cite>贤心</cite>
                            <!--<i class="iconfont icon-renzheng" title="认证信息：XXX"></i>-->
                            <i class="layui-badge fly-badge-vip">VIP3</i>
                        </a>
                        <span>刚刚</span>

                        <span class="fly-list-kiss layui-hide-xs" title="悬赏飞吻"><i class="iconfont icon-kiss"></i> 60</span>
                        <span class="layui-badge fly-badge-accept layui-hide-xs">已结</span>
                        <span class="fly-list-nums">
                        <i class="iconfont icon-pinglun1" title="回答"></i> 66
                      </span>
                    </div>
                    <div class="fly-list-badge">
                        <span class="layui-badge layui-bg-red">精帖</span>
                    </div>
                </li>
                <li>
                    <a href="user/home.html" class="fly-avatar">
                        <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                    </a>
                    <h2>
                        <a class="layui-badge">动态</a>
                        <a href="detail.html">基于 layui 的极简社区页面模版</a>
                    </h2>
                    <div class="fly-list-info">
                        <a href="user/home.html" link>
                            <cite>贤心</cite>
                            <!--
                            <i class="iconfont icon-renzheng" title="认证信息：XXX"></i>
                            <i class="layui-badge fly-badge-vip">VIP3</i>
                            -->
                        </a>
                        <span>刚刚</span>

                        <span class="fly-list-kiss layui-hide-xs" title="悬赏飞吻"><i class="iconfont icon-kiss"></i> 60</span>
                        <!--<span class="layui-badge fly-badge-accept layui-hide-xs">已结</span>-->
                        <span class="fly-list-nums">
                <i class="iconfont icon-pinglun1" title="回答"></i> 66
              </span>
                    </div>
                    <div class="fly-list-badge">
                        <!--<span class="layui-badge layui-bg-red">精帖</span>-->
                    </div>
                </li>
                @foreach( $posts as $post)
                    <li>
                        <a href="user/home.html" class="fly-avatar">
                            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"
                                 alt="贤心">
                        </a>
                        <h2>
                            <a class="layui-badge">动态</a>
                            <a href="detail/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <div class="fly-list-info">
                            <a href="user/home.html" link>
                                <cite>贤心</cite>
                                <!--
                                <i class="iconfont icon-renzheng" title="认证信息：XXX"></i>
                                <i class="layui-badge fly-badge-vip">VIP3</i>
                                -->
                            </a>
                            <span>@datetime(1619040848)</span>

                            <span class="fly-list-kiss layui-hide-xs" title="悬赏飞吻"><i
                                    class="iconfont icon-kiss"></i> 60</span>
                            <!--<span class="layui-badge fly-badge-accept layui-hide-xs">已结</span>-->
                            <span class="fly-list-nums">
                                <i class="iconfont icon-pinglun1" title="回答"></i> 66
                            </span>
                        </div>
                        <div class="fly-list-badge">
                            <!--<span class="layui-badge layui-bg-red">精帖</span>-->
                        </div>
                    </li>
                @endforeach
            </ul>

            <!-- <div class="fly-none">没有相关数据</div> -->

            <div style="text-align: center">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
@endsection

@section("container-right")
    <div class="layui-col-md4">
        @popular
        @endpopular
        <div class="fly-panel">
            <div class="fly-panel-title">
                这里可作为广告区域
            </div>
            <div class="fly-panel-main">
                <a href="" target="_blank" class="fly-zanzhu" style="background-color: #393D49;">虚席以待</a>
            </div>
        </div>

        <div class="fly-panel fly-link">
            <h3 class="fly-panel-title">友情链接</h3>
            <dl class="fly-panel-main">
                <dd><a href="http://www.layui.com/" target="_blank">layui</a><dd>
                <dd><a href="http://layim.layui.com/" target="_blank">WebIM</a><dd>
                <dd><a href="http://layer.layui.com/" target="_blank">layer</a><dd>
                <dd><a href="http://www.layui.com/laydate/" target="_blank">layDate</a><dd>
                <dd><a href="mailto:xianxin@layui-inc.com?subject=%E7%94%B3%E8%AF%B7Fly%E7%A4%BE%E5%8C%BA%E5%8F%8B%E9%93%BE" class="fly-link">申请友链</a><dd>
            </dl>
        </div>

    </div>
@endsection


@section("javascript")
<script>
layui.cache.page = 'jie';
layui.cache.user = {
  username: '游客'
  ,uid: -1
  ,avatar: '../../res/images/avatar/00.jpg'
  ,experience: 83
  ,sex: '男'
};
layui.config({
  version: "3.0.0"
  ,base: '../../res/mods/'
}).extend({
  fly: 'index'
}).use('fly');
</script>
@endsection
</body>
</html>
