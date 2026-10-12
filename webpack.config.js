const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

const config = {
    entry: "./resources/js/index.js",
    output: {
        path: path.resolve(__dirname, "public"),
        filename: "js/dist/[name].js",
        publicPath: "",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: "babel-loader",
                exclude: /node_modules/,
            },
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            importLoaders: 1,
                        },
                    },
                    "postcss-loader",
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "css/dist/style.css",
        }),
    ],
    optimization: {
        minimizer: ["...", new CssMinimizerPlugin()],
        runtimeChunk: "single",
        splitChunks: {
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/]/,
                    name: "vendors",
                    chunks: "all",
                },
            },
        },
    },
};

module.exports = config;
