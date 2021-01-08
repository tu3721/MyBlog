<template>
    <div style="height:100%">
        <el-container style="height:100%">
            <el-aside width="250px">
                <div class="demo-basic--circle">
                    <div class="block" style="margin: 2em auto">
                        <el-avatar style="border: 5px solid #FFFFFF" :size="150" src="images/blog1.jpg"></el-avatar>
                    </div>
                    <div style="padding-bottom:35px;color: #FFFFFF">一个一年366天睡不醒的程序媛</div>
                </div>
                <el-menu
                    style="border-right: 0px"
                    @select="handleSelect"
                    class="el-menu-vertical-demo"
                    background-color="#4b4b4b"
                    text-color="#fff"
                    active-text-color="#fff">
                    <el-menu-item index="1">
                        <span slot="title">简介</span>
                    </el-menu-item>
                    <el-menu-item index="2">
                        <span slot="title">PHP</span>
                    </el-menu-item>
                    <el-menu-item index="3">
                        <span slot="title">Linux</span>
                    </el-menu-item>
                    <el-menu-item index="4">
                        <span slot="title">vue</span>
                    </el-menu-item>
                    <el-menu-item index="5">
                        <span slot="title">bug集</span>
                    </el-menu-item>
                </el-menu>
            </el-aside>
            <el-main>
                <el-row style="height:100%">
                    <el-row style="margin: 0;width: 100%;height: 50%;padding: 80px 50px 50px;background: url('images/bg-1.png')">
                        <el-col :span="16" :offset="4">
                            <el-row style="font-size: 25px">
                                <i style="font-size: 35px;vertical-align: -5px" class="el-icon-star-on"></i>&nbsp;&nbsp;个人资料
                            </el-row>
                            <el-row>一个一年三百六十六天醒不来的程序媛</el-row>
                           <el-row style="padding-top:35px;line-height:35px">
                               <el-row>
                                   <el-col :span="2" style="width: 120px">邮 箱:</el-col>
                                   <el-col :span="20">1356493016@qq.com</el-col>
                               </el-row>
                               <el-row>
                                   <el-col :span="2" style="width: 120px">GitHub:</el-col>
                                   <el-col :span="20"><a href="https://github.com/tu3721" target="_blank">https://github.com/tu3721</a></el-col>
                               </el-row>
                               <el-row>
                                   <el-col :span="2" style="width: 120px">博 客:</el-col>
                                   <el-col :span="20">1356493016</el-col>
                               </el-row>
                               <el-row>
                                   <el-col :span="2" style="width: 120px">CSDN:</el-col>
                                   <el-col :span="20"><a href="https://blog.csdn.net/weixin_44888392?spm=1011.2124.3001.5343" target="_blank">https://blog.csdn.net/weixin_44888392?spm=1011.2124.3001.5343</a></el-col>
                               </el-row>
                           </el-row>
                        </el-col>
                    </el-row>
                    <el-col :span="20" :offset="2" style="text-align: center;margin: 0;width: 100%;height: 50%;background-color: orange">
                        <el-row style="padding:130px">
                            <el-col :span="8" style="text-align:center">
                                <span style="display: inline-block;background-color: #ffffff;width:100px;height:100px;border-radius: 50%;box-shadow: 0px 5px rgba(0,0,0,0.3)">
                                    <img style="margin-top: 25px;width: 50px;height: 50px" src="/images/php.png">
                                </span>
                                <el-row style="line-height:75px;font-size:25px;font-weight: 800">PHP</el-row>
                            </el-col>
                            <el-col :span="8" style="text-align:center">
                                <span style="display: inline-block;background-color: #ffffff;width:100px;height:100px;border-radius: 50%;box-shadow: 0px 5px rgba(0,0,0,0.3);">
                                    <img style="margin-top: 25px;width: 50px;height: 50px" src="/images/vue.png">
                                </span>
                                <el-row style="line-height:75px;font-size:25px;font-weight: 800">VUE</el-row>
                            </el-col>
                            <el-col :span="8" style="text-align:center">
                                <span style="display: inline-block;background-color: #ffffff;width:100px;height:100px;border-radius: 50%;box-shadow: 0px 5px rgba(0,0,0,0.3);">
                                    <img style="margin-top: 25px;width: 50px;height: 50px" src="/images/linux.png">
                                </span>
                                <el-row style="line-height:75px;font-size:25px;font-weight: 800">Linux</el-row>
                            </el-col>
                        </el-row>
                    </el-col>
                </el-row>
            </el-main>
        </el-container>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeIndex: '1'
            };
        },
        methods: {
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    html,body{
        height: 100%;
    }
    .el-aside {
        background-color: #4b4b4b;
        color: #333;
        text-align: center;

    }

    .el-main {
        background-color: #E9EEF3;
        color: #333;
        font-size: 16px;
        padding: 0;
    }

    body > .el-container {
        margin-bottom: 40px;
    }


</style>
