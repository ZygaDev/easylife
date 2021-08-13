const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
var CopyWebpackPlugin = require("copy-webpack-plugin");
// const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const webpack = require("webpack");
const path = require("path");

module.exports = {
    entry: "./src/index.js",
    output: {
        filename: "app.js",
        // path: path.resolve(__dirname, "dist"),
        // // publicPath: "./",
        // assetModuleFilename: "images/[name][ext][query]",
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: "./src/index.html",
        }),
        new MiniCssExtractPlugin({
            filename: "../dist/style.css",
        }),
        new CopyWebpackPlugin({
            patterns: [{ from: "./images", to: "../dist/images" }],
        }),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            jquery: "jquery",
        }),
        // new BrowserSyncPlugin({
        //     host: "localhost",
        //     port: 3000,
        //     proxy: "easylife.local/", //need to be changed to local website address,
        // }),
    ],
    module: {
        rules: [
            {
                test: /\.(js)$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: "babel-loader",
                        options: { presets: ["@babel/preset-env"] },
                    },
                    {
                        loader: "eslint-loader",
                    },
                ],
            },
            {
                test: /\.(scss|css)$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            url: false,
                            sourceMap: true,
                        },
                    },

                    "sass-loader",
                ],
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: ["file-loader"],
            },
            // {
            //     // Exposes jQuery for use outside Webpack build
            //     test: require.resolve("jquery"),
            //     use: [
            //         {
            //             loader: "expose-loader",
            //             options: "jQuery",
            //         },
            //         {
            //             loader: "expose-loader",
            //             options: "$",
            //         },
            //     ],
            // },
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [new CssMinimizerPlugin()],
    },
    resolve: {
        alias: {
            // bind to modules;
            modules: path.join(__dirname, "node_modules"),
        },
    },
};
